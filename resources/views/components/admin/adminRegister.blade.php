<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="flex h-screen max-w-6xl items-center justify-center overflow-hidden" style="background: #ffffff;">
    <div class="flex h-screen">
        <div
            class="i flex hidden items-center justify-around bg-gradient-to-tr from-blue-800 to-purple-700 md:block md:p-48">
            <div>
                <h1 class="font-sans text-4xl font-bold text-white">StudentFolio</h1>
                <p class="mt-1 text-white">Login</p>
                <button href="/admin/login" type="submit"
                    class="mt-4 mb-2 block w-28 rounded-2xl bg-white py-2 font-bold text-indigo-800">Login</button>
            </div>
        </div>
        <div class="flex w-1/2 items-center justify-center bg-white md:p-48">

            {{-- FORM STARTS --}}
            <form method="POST" action="/admin/register" class="bg-white">
                @csrf

                <h1 class="mb-1 text-2xl font-bold text-gray-800">Admin Register</h1>
                <p class="mb-7 text-sm font-normal text-gray-600">Welcome</p>
                <div class="mb-4 flex items-center rounded-2xl border-2 py-2 px-3">

                    <input class="border-none pl-2 outline-none" type="text" name="name" id=""
                        autocomplete="name" placeholder="Name" value="{{old('name')}}"/>

                </div>
                @error('name')
                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                @enderror

                <div class="mb-4 flex items-center rounded-2xl border-2 py-2 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="border-none pl-2 outline-none" type="email" name="email" id=""
                        autocomplete="email" placeholder="Email Address" value="{{old('email')}}" />

                </div>
                @error('email')
                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                @enderror

                <div class="flex items-center rounded-2xl border-2 py-2 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="border-none pl-2 outline-none" type="password" name="password" id=""
                        placeholder="Password" value="{{old('password')}}"/>

                </div>
                @error('password')
                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                @enderror

                <div class="mt-4 flex items-center rounded-2xl border-2 py-2 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="border-none pl-2 outline-none" type="password" name="password_confirmation"
                        id="" placeholder="Confirm Password" value="{{old('pasword')}}" />
                  

                </div>
                  @error('password_confirmation')
                        <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                    @enderror

                <button type="submit"
                    class="mt-4 mb-2 block w-full rounded-2xl bg-indigo-600 py-2 font-semibold text-white">Sign
                    Up</button>
                {{-- <span class="ml-2 cursor-pointer text-sm hover:text-blue-500">Forgot Password ?</span> --}}
                <h1 class="mt-3">Already have an account? <a href="/admin/login" class="text-blue-800">Login</a></h1>
            </form>

        </div>
    </div>
</body>

</html>
