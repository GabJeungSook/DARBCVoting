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
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use App\Models\Position;
use App\Models\Event;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ViewColumn;

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
                Fieldset::make('Candidate Personal Information')
                    ->schema([
                        TextInput::make('firstname')
                            ->label('First Name')
                            ->required(),
                        TextInput::make('middlename')
                            ->label('Middle Name')
                            ->required(),
                        TextInput::make('lastname')
                            ->label('Last Name')
                            ->required(),
                        DatePicker::make('birthdate')
                            ->label('Birthdate')
                            ->required(),
                        TextInput::make('address')
                            ->label('Address')
                            ->required(),
                        TextInput::make('contact_number')
                            ->label('Contact Number')
                            ->required(),
                    ])
                    ->columns(2),

                Fieldset::make('Other Information for Candidacy')->schema([
                    Select::make('position_id')
                        ->label('Position')
                        ->options(Position::all()->pluck('name', 'id'))
                        ->searchable()
                        ->required(),
                    Select::make('event_id')
                        ->label('Event')
                        ->options(Event::all()->pluck('name', 'id'))
                        ->searchable()
                        ->required(),
                    FileUpload::make('image_path')
                        ->label('Image Path')
                        ->directory('candidate_images')
                        ->required(),
                ]),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ViewColumn::make('image_path')->view(
                    'candidate-information-image'
                ),
                TextColumn::make('firstname')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('middlename')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lastname')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('birthdate')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('address')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('contact_number')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('id')
                    ->label('Position')
                    ->formatStateUsing(function ($record) {
                        return $record->candidates->first()->position->name;
                    })
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
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
