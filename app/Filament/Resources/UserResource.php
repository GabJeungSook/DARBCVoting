<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\Card;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Manage';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('NAME')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->label('EMAIL')
                        ->required(),
                    Forms\Components\TextInput::make('password')
                        ->password()
                        ->label('PASSWORD')
                        ->required(),
                    Forms\Components\Select::make('is_counter')
                        ->label('TYPE')
                        ->options([
                            0 => 'Admin',
                            1 => 'Counter',
                        ])
                        ->required(),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('NAME')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('EMAIL')
                    ->searchable()
                    ->sortable(),
                BadgeColumn::make('is_counter')
                    ->label('TYPE')
                    ->enum([
                        0 => 'Admin',
                        1 => 'Counter',
                    ])
                    ->colors([
                        'success' => 0,
                        'warning' => 1,
                    ]),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()->color('success')])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
