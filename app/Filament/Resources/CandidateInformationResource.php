<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateInformationResource\Pages;
use App\Filament\Resources\CandidateInformationResource\RelationManagers;
use App\Models\CandidateInformation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateInformationResource extends Resource
{
    protected static ?string $model = CandidateInformation::class;

    protected static ?string $navigationGroup = 'Manage';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Candidates';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCandidateInformation::route('/'),
            'create' => Pages\CreateCandidateInformation::route('/create'),
            'edit' => Pages\EditCandidateInformation::route('/{record}/edit'),
        ];
    }
}
