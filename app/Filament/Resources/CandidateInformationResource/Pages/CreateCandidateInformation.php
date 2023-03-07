<?php

namespace App\Filament\Resources\CandidateInformationResource\Pages;

use App\Filament\Resources\CandidateInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\CandidateInformation;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use DB;
class CreateCandidateInformation extends CreateRecord
{
    protected static string $resource = CandidateInformationResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        DB::beginTransaction();
        $candidate = CandidateInformation::create([
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'birthdate' => $data['birthdate'],
            'address' => $data['address'],
            'contact_number' => $data['contact_number'],
            'image_path' => $data['image_path'],
        ]);

        $candidateInformation = Candidate::create([
            'candidate_information_id' => $candidate->id,
            'position_id' => $data['position_id'],
            'event_id' => $data['event_id'],
        ]);
        DB::commit();

        return $candidateInformation;
    }
}
