<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthUserController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных запроса
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'login' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Password::defaults()],
        ]);

        // Создание нового пользователя
        $user = User::create([
            'name' => $validated['name'],
            'login' => $validated['login'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Авторизация пользователя
        Auth::login($user);

        return response()->json([
            'message' => 'Пользователь успешно зарегистрирован',
            'user' => $user->only(['id', 'name', 'email', 'login'])
        ], 201);
    }

    public function login(Request $request)
    {
        // Валидация данных запроса
        $request->validate([
            'login' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        // Получение учетных данных пользователя
        $credentials = $request->only('login', 'password');

        // Попытка аутентификации пользователя
        if (Auth::attempt($credentials)) {
            // Создание токена для аутентифицированного пользователя
            $token = $request->user()->createToken('authToken')->plainTextToken;
            // Возвращение ответа с токеном доступа
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }

        // Возвращение ошибки при неудачной аутентификации
        return response()->json(['error' => 'Пользователь не существует. Неверный логин или пароль'], 401);
    }

    public function logout(Request $request)
    {
        // Удаление текущего токена пользователя
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Успешный выход из системы'
        ]);
    }
}
