<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    <title>E-FaGro Intan Tani</title>
</head>
<body class="bg-[url('{{ asset('image/bg.png') }}')]">
    <main class="py-4">
        
        <!-- component -->
        <div class="container max-w-md mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow overflow-hidden">
            <div class="relative hidden xl:block xl:w-1/2 h-full">
            <img class="absolute h-auto w-full object-cover"src="image/login.png" alt="login"/>
            </div>
            <div class="w-full h-96 xl:w-1/2 p-8">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <h1 class=" text-2xl font-bold">Login to your account</h1>
                <div>
                <span class="text-gray-600 text-sm">Don't have an account?</span>
                <a href="/register"><span class="text-blue-700 text-sm font-semibold hover:underline">Register</span></a>
                </div>
                <div class="mb-4 mt-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2"htmlFor="email">Email</label>
                <input name="email" class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10" id="email" type="text" placeholder="Your email address"/>
                </div>
                <div class="mb-6 mt-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">Password</label>
                <input name="password" class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10" id="password" type="password" placeholder="Your password"/>
                <a class="inline-block align-baseline text-sm text-gray-600 hover:text-gray-800" href="/forgot">Forgot Password?</a>
                </div>
                <div class="flex w-full mt-8">
                <button type="submit" class="w-full bg-[#587a41] text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10"> {{ __('Login') }}</button>
                </div>
            </form>
            </div>
        </div>

    </main>
</body>
</html>