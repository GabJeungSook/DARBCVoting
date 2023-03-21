<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Member;
use Filament\Tables\Columns\ViewColumn;
use App\Models\Voter;
use App\Models\Event;

class Members extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    public $vote_modal = false;

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
            ViewColumn::make('id')
                ->label('STATUS')
                ->view('member-status-column'),
        ];
    }

    public function render()
    {
        return view('livewire.member.members');
    }

    public function openModal($id)
    {
        $this->vote_modal = true;
        // $event = Event::where('is_active', 1)->first()->id;

        // $voter = Voter::create([
        //     'member_id' => $id,
        //     'event_id' => $event,
        // ]);
    }
}
