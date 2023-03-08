<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Member;


class Members extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Member::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('NAME')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('type')
                ->label('TYPE')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('spa_name')
                ->label('SPA')
                ->default('NONE')
                ->searchable()
                ->sortable(),
        ];
    }

    public function render()
    {
        return view('livewire.member.members');
    }
}
