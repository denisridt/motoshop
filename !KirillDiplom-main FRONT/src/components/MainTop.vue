<script>
import { ref } from 'vue'
// import { useScrollLock } from '@vueuse/core';
import { api } from '@/services/api/index.js'
import { useCookies } from 'vue3-cookies'
import router from '@/router/index.js'

export default {
  setup() {
    const { cookies } = useCookies()
    const login = ref('') // Реактивная переменная для хранения введенного логина
    const password = ref('') // Реактивная переменная для хранения введенного пароля
    const modal = ref(false) // Реактивная переменная для управления видимостью модального окна
    const isLocked = ref(false) // Реактивная переменная для управления блокировкой скролла
    const registration = ref(false) // Реактивная переменная для переключения между режимами входа и регистрации
    const isAuth = ref(!!cookies.isKey('auth_token')) // Реактивная переменная для проверки авторизации пользователя
// Функция для отображения или скрытия модального окна
    const showModal = () => {
      if (isAuth.value) {
// Если пользователь авторизован, перенаправляем на страницу профиля
        return router.go('/profile')
      }
      modal.value = !modal.value // Переключаем видимость модального окна
      isLocked.value = !isLocked.value // Переключаем состояние блокировки скролла

// Обновляем состояние блокировки скролла
// useScrollLock(document.body, isLocked.value);
    }
// Функция для переключения в режим регистрации
    const switchReg = () => {
      registration.value = true
    }

// Функция для переключения в режим входа
    const switchLog = () => {
      registration.value = false
    }
// Асинхронная функция для выполнения запроса на вход
    const loginRequest = async () => await api.auth.login({login: login.value, password: password.value})

// Возвращаем объект с переменными и функциями, которые будут доступны в шаблоне
    return {
      isAuth,
      login,
      password,
      modal,
      registration,
      switchLog,
      showModal,
      switchReg,
      loginRequest
    }
  }
}
</script>
<template>
  <nav class="menu-top">
    <header>
      <div class="search_main">
        <img src="../../image/Search.png" alt="#" />
        <input class="text_search" type="search" placeholder="Найти...">
      </div>
      <div class="menu-icons">
        <span @click="showModal" class="text_nickname">{{ isAuth ? 'Профиль' : 'Авторизация' }}</span>
        <router-link to="profile">
          <a><img src="../../image/Avatar.png" alt="profile" /></a>
        </router-link>
        <router-link to="Basket">
          <img src="../../image/Cart.png" alt="/Basket" />
        </router-link>
      </div>
    </header>
  </nav>
  <Transition name="fade">
    <div v-show="modal" class="modal">
      <div class="modal-content">
        <div class="modal-main">
          <span @click="showModal" class="cross-active">
          <img src="../../image/Cross-active.png" alt="active" />
          </span>
          <div class="login-box">
            <div class="text-log_container">
              <div class="text-log" :class="{'white' : !registration}" @click="switchLog">Вход</div>
              <div class="white">/</div>
              <div class="text-log" :class="{'white' : registration}" @click="switchReg">Регистрация</div>
            </div>
            <div class="text-write_container" v-show="!registration">
              <div class="text-write">
                <input class="text_search_log" type="search" v-model="login" placeholder="Логин">
              </div>
              <div class="text-write_2">
                <input class="text_search_log" type="search" v-model="password" placeholder="Пароль">
              </div>
            </div>
            <div class="text-write_container" v-show="registration">
              <div class="text-write">
                <input class="text_search_log" type="search" placeholder="Ник">
              </div>
              <div class="text-write_2">
                <input class="text_search_log" type="search" placeholder="Почта">
              </div>
              <div class="text-write">
                <input class="text_search_log" type="search" placeholder="Логин">
              </div>
              <div class="text-write_2">
                <input class="text_search_log" type="search" placeholder="Пароль"
                       required
                       v-model="password" />
              </div>
            </div>
            <div class="button-log">
              <button class="button" @click="loginRequest">Войти</button>
              <button class="button">Регистрация</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>
<style>
.cross-active {
  position: absolute;
  padding: 20px 20px 0 0;
}
.white {
  color: white;
}
.button-log {
  display: flex;
  width: 345px;
  gap: 5px;
}
.text-write_container {
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 10px;
}
.text-write {
  color: white;
}
.text_search_log {
  color: white;
  border: solid 3px #A6A6A6;
  border-radius: 25px;
  background: transparent;
  padding-left: 10px;
  font-size: 14px;
  width: 255px;
  height: 35px;
}
.login-box {
  display: flex;
  flex-direction: column;
  gap: 30px;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}
.text-log_container {
  display: flex;
  gap: 10px;
}
.text-log {
  color: #6F7579;
  font-size: 14px;
}
.modal {
  z-index: 20;
  position: absolute;
  background-color: rgba(0, 0, 0, .8);
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.modal-main {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  height: 100%;
  justify-content: space-between;
}
.modal-content {
  z-index: 2;
  background-color: var(--Main-Background);
  width: 715px;
  height: 465px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.button {
  background-color: transparent;
  font-size: 16px;
  color: #fff;
  width: 170px;
  height: 40px;
  border: solid 3px #5C656C;
  border-radius: 25px;
  cursor: pointer;
}
.button:hover {
  background-color: var(--Dash-Board);
  color: white;
  border: solid 3px var(--Dash-Board);
}
header {
  display: flex;
  justify-content: space-between;
}
.search_main {
  padding: 8px 10px 8px 10px;
  width: 370px;
  height: 40px;
  display: flex;
  align-items: center;
  border-radius: 12.5px;
  background: var(--Rectangle7);
}
.search_main input {
  background: none;
  color: var(--Title-h1);
}
.search_main img {
  width: auto;
  height: auto;
}
.text_nickname {
  font-size: 12px;
  color: white;
}
.menu-icons{
  display: flex;
  align-items: center;
  gap: 10px;
}
.menu-icons img {
  width: auto;
  height: auto;
}
@media (max-width: 880px) {
  .menu-top{
    width: 740px;
    height: 40px;
  }
  .search_main{
    width: 370px;
    height: 40px;
  }
}
</style>








