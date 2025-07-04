<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    // Модель, связанная с ресурсом.
    protected static ?string $model = Product::class;

    // Иконка для навигации к ресурсу.
    protected static ?string $navigationIcon = 'heroicon-o-truck';

    // Метка для навигации к ресурсу.
    protected static ?string $navigationLabel = 'Товары';

    // Группа для навигации к ресурсу.
    protected static ?string $navigationGroup = 'Управление товарами';

    // Определяет форму для создания и редактирования записей.
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('comment')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('₽'),
                Forms\Components\TextInput::make('year')
                    ->required(),
                Forms\Components\Select::make('type_category_id')
                    ->required()
                    ->relationship('category', 'name')
                    ->native(false)
            ]);
    }

    /**
     * @throws \Exception
     */
    // Определяет таблицу для отображения записей.
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('comment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('type_category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //SelectFilter::make('Product')
                //->relationship('product', 'title')
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // Получает связанные ресурсы.
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    // Получает страницы ресурса.
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
