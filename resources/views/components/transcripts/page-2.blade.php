

<x-layout>

    
  <div class="container flex flex-col mx-auto p-8 md:flex-row">
    <div class="flex flex-col pt-2 p-16 items-center max-w-md p-8">
            
  
            <img src={{ asset('./images/identify-svgrepo-com.svg') }} style="height: 250px;" alt="">
           <h1 class="p-8 font-bold text-xl">Disclaimer</h1>
           <div class="p-16 -mt-20 items-center text-gray-500 text-sm">
            <p>You must be identified to certify that the information provided is true.</p>
          
       
        
        
        
           </div>
        
        </div>
       



        
        <div class="flex flex-col mx-auto max-w-lg mb-10 -mt-24 p-2 md:-mt-2 md:w-1/2 border border-slate-800 shadow-lg rounded-md">
            
            <div class="mx-auto p-8">
                <div class="border-b border-gray-900/10 pb-12">
                  <h2 class="text-base font-semibold leading-7 text-gray-900"><h1 class="text-2xl font-bold">Identification</h1></h2>
                  <p class="mt-1 text-sm leading-6 text-gray-600">Use a valid ID card to avoid rejection</p>
              
                  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class=" sm:col-span-3">
                      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Identification</label>
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Ghana Card</option>
                        <option>Voters ID</option>
                        <option>Drivers License</option>
                        <option>NHIS</option>
                        <option>Passport</option>
                      </select>
                      
                     
                        
                    </div>
              
                    <div class="sm:col-span-3">
                      <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Identification card number</label>
                    
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    
                    </div>
              
                    <div class="sm:col-span-4">
                     
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">ID file (pdf only. 5mb max)</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                      <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" style="font-size:10px">NB: Provide a pdf copy of the biodata page of your ID card (This page should contain your name, your picture and the picture of your ID card) </div>
                      </div>
                      
                    
                    </div>
                    <a href="/page-3"><button class="mt-48 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                      Next
                  </button></a>
                  </div>
                </div>
                </div>
                <!-- CARD ENDS -->
                
              </div>
            </div>
            
                
             
       

</x-layout>