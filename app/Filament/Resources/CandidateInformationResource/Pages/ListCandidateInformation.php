<?php

namespace App\Filament\Resources\CandidateInformationResource\Pages;

use App\Filament\Resources\CandidateInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCandidateInformation extends ListRecords
{
    protected static string $resource = CandidateInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
