<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\Action;
use App\Imports\MemberImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Member;
use Spatie\SimpleExcel\SimpleExcelReader;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;

class ListMembers extends ListRecords
{
    protected static string $resource = MemberResource::class;

    public $attachment;
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('upload_files')
                ->label('Upload members from CSV')
                ->icon('heroicon-o-upload')
                ->action(function (array $data): void {
                    // dd($data['attachment']);
                    $csvContents = Storage::get($data['attachment']);
                    $csvReader = Reader::createFromString($csvContents);
                    $csvRecords = $csvReader->getRecords();

                    foreach ($csvRecords as $csvRecord) {
                        Member::create([
                            'name' => $csvRecord[0],
                            'spa_name' => $csvRecord[1],
                        ]);
                    }
                })
                ->form([FileUpload::make('attachment')->preserveFilenames()]),
        ];
    }
}
