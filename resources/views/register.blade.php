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
     <div class="  flex items-center ">
        <img src="{{ asset('assetlogin/asset1.png') }}" alt="Login Image" class="w-[589px] h-[832px] ml-[100px] ">
    </div>
    
    <div class="w-1/2 flex flex-col justify-center px-24 bg-gray-100">
        <h1 class="text-5xl font-bold mb-2 leading-tight">CREATE
<br>ACCOUNT</h1>
        <p class="text-sm uppercase tracking-wide mb-10">Sign up with your  account to get started</p>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-6">
        <label class="text-xs font-bold tracking-widest block mb-2">NAME</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-black px-4 py-2 outline-none" required />
    </div>

    <!-- Email -->
    <div class="mb-6">
        <label class="text-xs font-bold tracking-widest block mb-2">EMAIL</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-black px-4 py-2 outline-none" required />
    </div>

    <!-- Password -->
    <div class="mb-6">
        <label class="text-xs font-bold tracking-widest block mb-2">PASSWORD</label>
        <input type="password" name="password" class="w-full border border-black px-4 py-2 outline-none" required />
    </div>

    <!-- Confirm Password -->
    <div class="mb-6">
        <label class="text-xs font-bold tracking-widest block mb-2">CONFIRM PASSWORD</label>
        <input type="password" name="password_confirmation" class="w-full border border-black px-4 py-2 outline-none" required />
    </div>

    <!-- Submit Button -->
    <div class="mb-6">
        <button type="submit" class="w-full bg-black text-white px-4 py-2 font-bold hover:bg-gray-800 transition">
            REGISTER
        </button>
    </div>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login.form') }}">Login</a></p>
</body>
</html>
