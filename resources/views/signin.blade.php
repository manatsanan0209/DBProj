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
    <div class="mx-auto w-full max-w-screen-xl h-full flex items-center justify-center">
        <div class="text-center bg-white p-12 rounded-lg">
            <h1 class="text-4xl font-semibold text-gray-900">Login</h1>
            <form class="max-w-sm mx-auto my-4">
                @csrf
                <div class="mb-5">
                    <input type="text" id="fname"
                        class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Email" required />
                </div>
                <div class="mb-5">
                    <input type="password" id="password" minlength="10"
                        class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Password" required />
                </div>
                <label class="font-semibold text-gray-400">
                    <input type="checkbox" checked="checked" name="remember" class="border-stone-300  "> Remember me
                </label>
                <br>
                <button type="Login" style="width: 300px; margin-top:20px;"
                    class="mx-auto block text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Login</button>
                <a href="/register" class="mx-auto block text-center font-semibold text-gray-400 underline">Create New
                    Account</a>
            </form>
        </div>
    </div>




    <!-- Footer -->
    @include('components\_footer')
</body>

</html>