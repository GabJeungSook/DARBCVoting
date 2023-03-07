<x-counter-layout>
  <main class="flex-1 overflow-y-auto">
    <!-- Primary column -->
    <section aria-labelledby="primary-heading" class="flex h-full min-w-0 py-5  flex-1 flex-col lg:order-last">
      <div class="bg-gray-100 rounded-l-3xl p-10 h-full   ">
        <header class="text-xl font-bold text-gray-700">DASHBOARD</header>
        <div class="mt-5 bg-white rounded-3xl relative p-10">
          <h1 class="font-medium text-xl">Hi {{ auth()->user()->name }}!</h1>
          <p>Check how voting is carried out in your counter.</p>
          <span
            class="inline-flex items-center rounded-full bg-indigo-100  px-3 py-0.5 text-sm font-medium text-indigo-800">DARBCVoting
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" class="pl-1 fill-green-600"
              height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M11.602 13.76l1.412 1.412 8.466-8.466 1.414 1.414-9.88 9.88-6.364-6.364 1.414-1.414 2.125 2.125 1.413 1.412zm.002-2.828l4.952-4.953 1.41 1.41-4.952 4.953-1.41-1.41zm-2.827 5.655L7.364 18 1 11.636l1.414-1.414 1.413 1.413-.001.001 4.951 4.951z" />
            </svg></span>
          <div class="absolute -top-14 right-20">
            <x-svg.dashboard />
          </div>
        </div>

      </div>
    </section>
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
