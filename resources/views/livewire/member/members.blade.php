<div class="h-full">
  <section aria-labelledby="primary-heading" class="flex h-full min-w-0 py-5  flex-1 flex-col lg:order-last">
    <div class="bg-gray-100 rounded-l-3xl p-10 h-full   ">
      <header class="text-xl font-bold text-gray-700">MEMBERS</header>
      <div class="mt-5 bg-white rounded-3xl relative p-10">
        {{ $this->table }}
      </div>

    </div>
  </section>
  <x-modal.card title="" blur wire:model.defer="vote_modal" fullscreen>
    <div class="mx-auto max-w-5xl">
      <div class="border h-[35rem]">sd</div>
    </div>

    <x-slot name="footer">
      <div class="flex justify-between gap-x-4">
        <x-button flat negative label="Delete" wire:click="delete" />

        <div class="flex">

          <x-button positive lg right-icon="save-as" label="SAVE" wire:click="Save All Vote" />
        </div>
      </div>
    </x-slot>
  </x-modal.card>
</div>
