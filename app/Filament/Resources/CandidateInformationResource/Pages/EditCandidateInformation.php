<?php

namespace App\Filament\Resources\CandidateInformationResource\Pages;

use App\Filament\Resources\CandidateInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCandidateInformation extends EditRecord
{
    protected static string $resource = CandidateInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
