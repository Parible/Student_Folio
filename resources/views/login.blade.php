<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
 
</head>
<body class="h-screen overflow-hidden flex items-center  justify-center max-w-6xl" style="background: #ffffff;">
    <div class="h-screen flex">
  <div class="hidden flex bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center  md:block md:p-48">
    <div>
      <h1 class="text-white font-bold text-4xl font-sans">StudentFolio</h1>
      <p class="text-white mt-1">Sign Up Today</p>
      <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Sign Up</button>
    </div>
  </div>
  <div class="flex w-1/2 justify-center items-center bg-white  md:p-48">
    <form class="bg-white">
      <h1 class="text-gray-800 font-bold text-2xl mb-1">Login</h1>
      <p class="text-sm font-normal text-gray-600 mb-7">Welcome</p>
      <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
        </svg>
        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email Address" />
      </div>
      <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
      </div>
      <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
      <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>
      <h1 class="mt-3">Don't have an account? <a href="/register" class="text-blue-800">Register</a></h1>
    </form>
  </div>
</div>
</body>
</html>
