<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
 
    
    <title>studFolio</title>

    <style>

        .hamburger {
  cursor: pointer;
  width: 24px;
  height: 24px;
  transition: all 0.25s;
  position: relative;
}

.hamburger-top,
.hamburger-middle,
.hamburger-bottom {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 2px;
  background: #000;
  transform: rotate(0);
  transition: all 0.5s;
}

.hamburger-middle {
  transform: translateY(7px);
}

.hamburger-bottom {
  transform: translateY(14px);
}

.open {
  transform: rotate(90deg);
  transform: translateY(0px);
}

.open .hamburger-top {
  transform: rotate(45deg) translateY(6px) translate(6px);
}

.open .hamburger-middle {
  display: none;
}

.open .hamburger-bottom {
  transform: rotate(-45deg) translateY(6px) translate(-6px);
}

    </style>
</head>
<body>

    
    <!-- NAV START -->

    <nav class="relative bg-white shadow-lg dark:bg-gray-800 ">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <a href="/">
                        <span class="w-auto h-6 sm:h-7"  alt=""><h1 class="ml-16 pr-2 pl-2 pb-2 shadow-xl text-2xl text-white font-bold rounded-full bg-gradient-to-tr from-blue-400 to-purple-500" ><b>StudentFolio</b></h1>
                    </a></span>
    





                    {{-- x-cloak @click="isOpen = !isOpen" t --}}
                    
                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                       


                        <!-- Hamburger Icon -->
      <button
      id="menu-btn"
      class="block hamburger md:hidden focus:outline-none"
    >
      <span class="hamburger-top"></span>
      <span class="hamburger-middle"></span>
      <span class="hamburger-bottom"></span>
    </button>


                        






                    </div>
                </div>

                
    
                
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->

                
                <div class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                    <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">

                        <div class="">
                            <div
                              id="menu">

                        <a href="/page-1" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Transcripts</a>
                        <a href="/intern-1" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Internships</a>
                        <a href="/resit-1" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Re-sits</a>
                        <a href="#" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Track</a>
                    </div>
                    </div>
                    </div>
    
                    {{-- Notification bell --}}
                    <div class="flex items-center mt-4 lg:mt-0">
                        <button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        {{-- profile --}}
                        <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                            <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="object-cover w-full h-full" alt="avatar">
                            </div>
    
                            <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Patrick</h3>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- NAV END -->

   
   

        
<main>
    


    {{ $slot }}


</main>    

   
</body>
<script>
const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')

})

</script>
</html>
