@php
  $event = \App\Models\Event::where('is_active', 1)->first()->id;
  $status = \App\Models\Voter::where('member_id', $getState())
      ->where('event_id', $event)
      ->first();
@endphp

<div>
  @if ($status == null)
    <x-button label="Vote Now" icon="arrow-right" wire:click="openModal({{ $getState() }})"
      spinner="openModal({{ $getState() }})" rounded positive sm />
  @elseif($status->is_voted == 1)
    <x-badge label="Voted" positive icon="check" />
  @else
    <x-badge label="Not Voted" negative icon="x" />
  @endif
</div>
