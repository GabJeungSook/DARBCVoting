<x-counter-layout>
    <main class="flex-1 overflow-y-auto">
        <!-- Primary column -->
        <livewire:member.members />
      </main>

      <!-- Secondary column (hidden on smaller screens) -->
      <aside class="hidden w-96 overflow-y-auto  py-5 border-gray-200  lg:block">
        <div class="bg-white  p-4 py-10 h-full   ">
          <h1>Current votes status</h1>
          <div class="mt-3 bg-gray-800 rounded-2xl p-5 flex flex-col justify-center relative items-center">
            <h1 class="text-green-400 font-bold text-2xl">100</h1>
            <h1 class="text-gray-400">votes used</h1>
            <div class="absolute right-0 opacity-50">
              <x-svg.vote />
            </div>
          </div>
          <div class="mt-4">
            <h1>Voting activity</h1>
            <ul role="list" class="divide-y mt-3 divide-gray-200">
              <li class="flex py-4">
                <img class="h-10 w-10 rounded-full"
                  src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
                <div class="ml-3">
                  <p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
                  <p class="text-sm text-gray-500">calvin.hawkins@example.com</p>
                </div>
              </li>

              <li class="flex py-4">
                <img class="h-10 w-10 rounded-full"
                  src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
                <div class="ml-3">
                  <p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
                  <p class="text-sm text-gray-500">kristen.ramos@example.com</p>
                </div>
              </li>

              <li class="flex py-4">
                <img class="h-10 w-10 rounded-full"
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
                <div class="ml-3">
                  <p class="text-sm font-medium text-gray-900">Ted Fox</p>
                  <p class="text-sm text-gray-500">ted.fox@example.com</p>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </aside>
</x-counter-layout>
