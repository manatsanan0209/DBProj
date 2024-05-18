<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>SormMaiSed</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">
    <!-- Navbar -->
    @include('components\_navbar')

    <!-- Content -->
    {{-- <div class='flex card mx-auto w-3/6 h-3/6 bg-orange-100 justify-center'> --}}
        {{-- <div class='card-body text-center items-center'> --}}
            <p class="card-title flex justify-center text-white text-4xl">Login</p>

            <form class="max-w-sm mx-auto my-56">
                @csrf
                <div class="mb-5">
                    <input type="text" id="fname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Email" required />
                </div>
                <div class="mb-5">
                    <input type="password" id="password" minlength="10"
                        class="remove-arrow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Password" required />
                </div>
                <label class="font-semibold text-gray-400">
                    <input type="checkbox" checked="checked" name="remember" class="border-stone-300  "> Remember me
                </label>
                <br>
                <button type="Login" style="width: 300px; margin-top:20px;"
                    class="mx-auto block text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Login</button>
                <a href="/register" class="mx-auto block text-center font-semibold text-gray-400 underline">Create New
                    Account</a>
                {{-- <button class="btn">Button</button>
        <button class="btn btn-outline btn-success">Success</button> --}}
            </form>
            </form>
        {{-- </div> --}}
    {{-- </div> --}}

    <!-- Footer -->
    @include('components\_footer')
</body>

</html>