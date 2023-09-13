<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Document</title>
</head>

<!-- NAV START -->

<body style="background: #edf2f7;">

    <div>
        <nav class="fixed z-30 w-full border-b border-gray-200 bg-white drop-shadow-xl">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                            class="mr-2 cursor-pointer rounded p-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 lg:hidden">
                            <svg id="toggleSidebarMobileHamburger" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg id="toggleSidebarMobileClose" class="hidden h-6 w-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <a href="/admin">
                            <span class="h-6 w-auto sm:h-7" alt="">
                                <h1
                                    class="ml-16 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 text-2xl font-bold text-white shadow-xl hover:text-gray-300">
                                    <b>ManageStudentFolio</b>
                                </h1></a></span>

                       
                    </div>

                    <div class="flex items-center">
                        <button id="toggleSidebarMobileSearch" type="button"
                            class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 lg:hidden">
                            <span class="sr-only">Search</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>

                             {{-- <a href="/admin"><button
                                class="mx-2 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300">goHome</button></a> --}}


                             
                           



                         @auth


                          @php
                                $admins = App\Models\Admin::all();
                            @endphp


                          @foreach ($admins as $admin)
                               
                           

                        </button>
                        <div class="hidden items-center lg:flex">
                            <span class="mr-5 text-base font-bold text-gray-500">Welcome <span class="font-bold text-gray-600">{{ $admin->name }} </span> </span>

                        </div>
                        @break
                         @endforeach
                         
                         
                         
                             <form action="/admin/logout" method="POST">
                                @csrf

                        <a href="/admin"><button
                                class="mx-2 rounded-full bg-gradient-to-tr from-blue-400 to-red-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300">Logout</button></a>

                             </form>
                               
                        
                                @else

                                
                        </button>
                        <div class="hidden items-center lg:flex">
                            <span class="mr-5 text-base font-bold text-gray-500">Welcome</span>

                        </div>
                   


                                <a href="/admin/login"><button
                                class="mx-2 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300">Sign In</button></a>

                                 @endauth
                                
                    </div>
                </div>
            </div>
        </nav>

        <!-- NAV END -->

        <main>
           
    
    <div class="bg-white">
        <div class="container mx-auto px-6 py-32">

            <h2 class="text-center text-3xl font-bold capitalize text-gray-800 lg:text-4xl">Admin Control Panel</h2>
    
            {{-- <p class="mx-auto mt-4 max-w-2xl text-center text-gray-500 dark:text-gray-300 xl:mt-6">Welcome to student folio where we help manage applications online. We aim to help students easily retrieve documents in the comfort of their homes while been able to keep real-time track of them</p> --}}
    
            <div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:mt-12 xl:gap-12">
                

{{-- 

            <div class="w-full space-y-8 rounded-lg border x bg-gradient-to-tr from-blue-800 to-purple-700 hover:bg-blue-600 border-gray-100 p-8 text-center dark:border-gray-700">
                <p class="font-medium uppercase text-white dark:text-gray-300"></p>
    
                <h2 class="text-4xl font-bold text-white dark:text-gray-100">Internship</h2>
    
                <p class="font-medium text-white dark:text-gray-300">Generate your attachment letter </p>
    
                <a href="/admin/intern"><button class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">Place Request</button></a>
            </div> --}}


            
    
            <div class="w-full space-y-8 rounded-lg bg-blue-600 p-8 text-center">
                <p class="font-medium uppercase text-gray-200"></p>
    
                <h2 class="text-4xl font-bold text-white dark:text-gray-100">All Requests</h2>
    
                {{-- <p class="font-medium text-gray-200">Request for Transcripts, Letter of Attestation, ID Replacement etc </p> --}}
    
                <a href="/admin/transcripts"><button class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">Manage</button>
            </div></a>
    
            <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700 x bg-gradient-to-tr from-blue-800 to-purple-700 ">
                <p class="font-medium uppercase text-white dark:text-gray-300"></p>
    
                <h2 class="text-4xl font-bold text-white dark:text-gray-100">Re-sit</h2>
    
                {{-- <p class="font-medium text-white dark:text-gray-300">Apply for a resit</p> --}}
    
                <a href="/admin/resit"><button class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">Manage</button></a>
            </div>
            </div>
        </div>
        </div>



        </main>
    </div>
</body>

</html>
