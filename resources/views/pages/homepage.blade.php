<x-layout>
    
    <div class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Everything In One Place</h1>
    
            <p class="mx-auto mt-4 max-w-2xl text-center text-gray-500 dark:text-gray-300 xl:mt-6"> Hello <span class="font-bold italic"> {{ auth()->user()->name }} </span>👋, Welcome to Student Folio, your online application management solution. Our mission is to empower students to conveniently access their documents from the comfort of their homes and effortlessly track them in real-time.</p>
    
            <div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:mt-12 xl:gap-12">
                



            <div class="w-full space-y-8 rounded-lg border x bg-gradient-to-tr from-blue-800 to-purple-700 hover:bg-blue-600 border-gray-100 p-8 text-center dark:border-gray-700">
                <p class="font-medium uppercase text-white dark:text-gray-300"></p>
    
                <h2 class="text-4xl font-bold text-white dark:text-gray-100">Internship</h2>
    
                <p class="font-medium text-white dark:text-gray-300">Generate your attachment letter </p>
    
                <a href="/intern-1"><button class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">Place Request</button></a>
            </div>


            
    
            <div class="w-full space-y-8 rounded-lg bg-blue-600 p-8 text-center">
                <p class="font-medium uppercase text-gray-200"></p>
    
                <h2 class="text-4xl font-bold text-white dark:text-gray-100">All Requests</h2>
    
                <p class="font-medium text-gray-200">Request for Transcripts, Letter of Attestation, ID Replacement etc </p>
    
                <a href="/transcript"><button class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">Place Request</button>
            </div></a>
    
            <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700 x bg-gradient-to-tr from-blue-800 to-purple-700 ">
                <p class="font-medium uppercase text-white dark:text-gray-300"></p>
    
                <h2 class="text-4xl font-bold text-white dark:text-gray-100">Re-sit</h2>
    
                <p class="font-medium text-white dark:text-gray-300">Apply for a resit</p>
    
                <a href="/resit-1"><button class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">Place Request</button></a>
            </div>
            </div>
        </div>
        </div>

</x-layout>