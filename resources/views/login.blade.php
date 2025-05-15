<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

<div class="min-h-screen flex">
    <!-- Left Side -->
    <div class="w-1/2 flex flex-col justify-center px-24 bg-gray-100">
        <h1 class="text-5xl font-bold mb-2 leading-tight">WELCOME<br>BACK!</h1>
        <p class="text-sm uppercase tracking-wide mb-10">Sign in with your  account to get started</p>

        <!-- Error messages -->
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Login Form -->
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-6">
                <label class="text-xs font-bold tracking-widest block mb-2">USER NAME</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-black px-4 py-2 outline-none" required />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="text-xs font-bold tracking-widest block mb-2">PASSWORD</label>
                <input type="password" name="password" class="w-full border border-black px-4 py-2 outline-none" required />
            </div>

            <!-- Remember & Forgot -->
            <div class="flex justify-between items-center mb-6">
                <label class="inline-flex items-center text-sm">
                    <input type="checkbox" name="remember" class="mr-2 border-black">
                    REMEMBER ME
                </label>
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full bg-gray-300 hover:bg-gray-400 text-black font-bold py-3 border border-black">
                LOGIN
            </button>

            <!-- Signup -->
            <p class="text-sm mt-5">NEW USER? 
                <a href="{{ route('register.form') }}" class="font-bold underline">SIGNUP</a>
            </p>
        </form>
    </div>

    <!-- Right Side Image -->
    <div class="  flex items-center ">
        <img src="{{ asset('assetlogin/asset1.png') }}" alt="Login Image" class="w-[589px] h-[832px] ml-[100px] ">
    </div>
</div>

</body>
</html>
