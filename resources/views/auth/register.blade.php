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
        
        <div class="container max-w-md mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow overflow-hidden">
            <div class="relative hidden xl:block xl:w-1/2 h-full">
              <img class="absolute h-auto w-full object-cover"src="image/login.png"alt="my zomato"/>
            </div>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                @endif
                @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                @endif
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                @endif
                <div class="w-full xl:w-1/2 p-8">
                <form method="POST" action="{{ route('register') }}">
                        <h1 class=" text-2xl font-bold">Register</h1>
                @csrf   
                    <div class="mb-4 mt-6">
                        <label class="block text-gray-700 text-sm font-semibold mb-2"htmlFor="name">Name</label>
                        <input class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name">
                        
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>
                    <div class="mb-4 mt-6">
                        <label class="block text-gray-700 text-sm font-semibold mb-2"htmlFor="email">Email</label>
                        <input class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>
                    <div class="mb-4 mt-6">
                        <label class="block text-gray-700 text-sm font-semibold mb-2"htmlFor="password">Password</label>
                        <input class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="password" required autocomplete="password">
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>
                    <div class="mb-4 mt-6">
                        <label class="block text-gray-700 text-sm font-semibold mb-2"htmlFor="password-confirm">Confirm Password</label>
                        <input class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"  id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
        
                    </div>
                    <div class="flex w-full mt-8">
        
                        <button class="w-full bg-[#587a41] text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10" type="submit">{{ __('Register') }}</button>
                      </div>
                        <p>Sudah punya akun? Login<a href="{{ route('login') }}" class="text-decoration-none text-underline text-blue-700"> disini</a></p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
        </div>
        </div>
        </div>

    </main>
</body>
</html>