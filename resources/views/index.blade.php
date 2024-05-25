<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>SormMaiSed</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-gray-900">

  <!-- Navbar -->
  <nav class="bg-white dark:bg-gray-900 fixed top-0 w-full z-10">
    <div class="mx-auto w-full max-w-screen-xl p-4">
      <div class="flex justify-between">
        <a href="/" class="flex items-center">
          <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">SormMaiSed</span>
        </a>
        <div class="flex items-center">
          <a href="/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">Home</a>
          <?php
          $user = session('user')
          ?>
          @if($user)
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            {{ $user->customer_username }}
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Account setting</a>
              </li>
              <li>
                <a href="{{ route('waitpayment') }}" class="block px-4 py-2 hover:bg-gray-100">Order</a>
              </li>
              <li>
                <a href="signout" class="block px-4 py-2 hover:bg-gray-100 text-red-600">Sign out</a>
              </li>
            </ul>
          </div>
          @else
          <a href="signin" class="ml-6 text-gray-500 hover:text-gray-900 dark:hover:text-white">Sign in</a>
          <a href="signup" class="ml-6 text-gray-500 hover:text-gray-900 dark:hover:text-white">Sign up</a>
          @endif
        </div>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="mx-auto w-full max-w-screen-xl h-full flex items-center justify-center">
    <div class="text-center">
      <h1 class="text-4xl font-semibold text-gray-900 dark:text-white">Welcome to SormMaiSed</h1>
      <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">A Website for Maintennance / Service.</p>
      <div class="mt-8 grid">
        <a href="/maintain" class="px-6 py-3 my-2 mx-auto bg-white text-black rounded-md hover:bg-blue-500 hover:text-white w-2/3 lg:w-full">Maintennance
          / Service</a>
        <a href="/follow" class="px-6 py-3 my-2 mx-auto bg-white text-black rounded-md hover:bg-blue-600 hover:text-white w-2/3 lg:w-full">Follow
          up your device</a>
      </div>
    </div>
  </div>




  <!-- Footer -->
  @include('components\_footer')
</body>

</html>