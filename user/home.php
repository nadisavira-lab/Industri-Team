<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="relative bg-amber-600 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <div class="relative flex h-20 items-center justify-between">
      <!-- Mobile -->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <!-- Mobile -->

      <div class="flex flex-1 sm:justify-between">
        <!-- Logo -->
        <div class="flex shrink-0 items-center">
          <img src="Manyang.png" alt="Your Company" class="absolute h-20 w-auto d-flex" />
        </div>
        <!-- Logo -->

        <div class="flex items-center border pl-4 gap-2 border-gray-50 h-[40px] rounded-full overflow-hidden max-w-md w-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="#ffffff">
            <path d="M13 3C7.489 3 3 7.489 3 13s4.489 10 10 10a9.95 9.95 0 0 0 6.322-2.264l5.971 5.971a1 1 0 1 0 1.414-1.414l-5.97-5.97A9.95 9.95 0 0 0 23 13c0-5.511-4.489-10-10-10m0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8-8-3.57-8-8 3.57-8 8-8"/>
          </svg>
          <input type="text" placeholder="Search" class="w-full h-full outline-none text-gray-50 bg-transparent placeholder-gray-50 text-sm">
        </div>
        
        <!-- nav a -->
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-50 hover:bg-white/20 hover:text-white">Products</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-50 hover:bg-white/20 hover:text-white">Products</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-50 hover:bg-white/20 hover:text-white">Projects</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-50 hover:bg-white/20 hover:text-white">Calendar</a>
          </div>
        </div>
        <!-- nav a -->

      </div>

      <!-- Btn -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full p-1 text-gray-50 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>      
      <!-- Btn -->

    </nav>
    <!-- Navbar -->
    
</body>
</html>