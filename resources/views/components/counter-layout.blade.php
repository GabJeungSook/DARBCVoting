<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-indigo-700">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Scripts -->
  @wireUiScripts
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>

<body class="font-sans antialiased h-full overflow-hidden">
  <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-50">
  <body class="h-full overflow-hidden">
  ```
-->
  <div class="flex h-full">
    <!-- Narrow sidebar -->
    <div class="hidden w-28 overflow-y-auto bg-indigo-700 md:block">
      <div class="flex w-full flex-col items-center py-6">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-16 w-auto" src="{{ asset('images/dar.png') }}" alt="Your Company">
        </div>
        <div class="mt-6 w-full flex-1 space-y-1 px-2">
          <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
          <a href="{{ route('counter.dashboard') }}"
            class="text-indigo-100 hover:bg-indigo-800 fill-white hover:text-white group flex w-full flex-col items-center rounded-md p-3 text-sm font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M6 19h12V9.157l-6-5.454-6 5.454V19zm13 2H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM8 10a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5v-2zm0 4a3 3 0 0 1 3 3H8v-3z" />
            </svg>
            <span class="mt-2">Home</span>
          </a>

          <a href="{{ route('counter.member') }}"
            class="text-indigo-100 hover:bg-indigo-800 fill-white hover:text-white group flex w-full flex-col items-center rounded-md p-3 text-sm font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M14 14.252v2.09A6 6 0 0 0 6 22l-2-.001a8 8 0 0 1 10-7.748zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm5.793 8.914l3.535-3.535 1.415 1.414-4.95 4.95-3.536-3.536 1.415-1.414 2.12 2.121z" />
            </svg>
            <span class="mt-2">Members</span>
          </a>


        </div>
      </div>
    </div>

    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div class="relative z-20 md:hidden" role="dialog" aria-modal="true">
      <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

      <div class="fixed inset-0 z-40 flex">
        <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
        <div class="relative flex w-full max-w-xs flex-1 flex-col bg-indigo-700 pt-5 pb-4">
          <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
          <div class="absolute top-1 right-0 -mr-14 p-1">
            <button type="button"
              class="flex h-12 w-12 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-white">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
              <span class="sr-only">Close sidebar</span>
            </button>
          </div>

          <div class="flex flex-shrink-0 items-center px-4">
            <img class="h-8 w-auto" src="{{ asset('images/dar.png') }}" alt="Your Company">
          </div>
          <div class="mt-5 h-0 flex-1 overflow-y-auto px-2">
            <nav class="flex h-full flex-col">
              <div class="space-y-1">
                <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
                <a href="#"
                  class="text-indigo-100 hover:bg-indigo-800 hover:text-white group flex items-center rounded-md py-2 px-3 text-sm font-medium">
                  <!-- Current: "text-white", Default: "text-indigo-300 group-hover:text-white" -->
                  <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  <span>Home</span>
                </a>

                <a href="#"
                  class="text-indigo-100 hover:bg-indigo-800 hover:text-white group flex items-center rounded-md py-2 px-3 text-sm font-medium">
                  <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                  </svg>
                  <span>All Files</span>
                </a>

                <a href="#"
                  class="bg-indigo-800 text-white group flex items-center rounded-md py-2 px-3 text-sm font-medium"
                  aria-current="page">
                  <svg class="text-white mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>
                  <span>Photos</span>
                </a>

                <a href="#"
                  class="text-indigo-100 hover:bg-indigo-800 hover:text-white group flex items-center rounded-md py-2 px-3 text-sm font-medium">
                  <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                  </svg>
                  <span>Shared</span>
                </a>

                <a href="#"
                  class="text-indigo-100 hover:bg-indigo-800 hover:text-white group flex items-center rounded-md py-2 px-3 text-sm font-medium">
                  <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>
                  <span>Albums</span>
                </a>

                <a href="#"
                  class="text-indigo-100 hover:bg-indigo-800 hover:text-white group flex items-center rounded-md py-2 px-3 text-sm font-medium">
                  <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                  </svg>
                  <span>Settings</span>
                </a>
              </div>
            </nav>
          </div>
        </div>

        <div class="w-14 flex-shrink-0" aria-hidden="true">
          <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
      </div>
    </div>

    <!-- Content area -->
    <div class="flex flex-1 flex-col overflow-hidden">


      <!-- Main content -->
      <div class="flex  flex-1  items-stretch overflow-hidden">
        {{ $slot }}
      </div>
    </div>
  </div>

  @livewireScripts
</body>

</html>
