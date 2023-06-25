<x-layout>
    
    <div class="container flex flex-col mx-auto p-8 md:flex-row">
      <div class="flex flex-col pt-2 p-16 items-center max-w-md p-8">
              
    
              <img src={{ asset('./images/avatar-default-svgrepo-com.svg') }} style="height: 250px;" alt="">
             <h1 class="p-8 font-bold text-xl"> Image Requirements</h1>
             <div class="p-16 -mt-20 items-center text-gray-500 text-sm">
              <p>Size: less than 1mb</p>
              <p>Resolution: 1:1(eg. 200*200)</p>
              <p>Accepted Image type files: jpg or jpeg</p>
          
              <div class="mt-10">
  
  
             
              <h1 class="text-1xl font-bold text-black">Passport Picture</h1>
              <p class="mt-2">Upload a file</p>
           
  
  
              <form class="mt-2 flex items-center space-x-6">
                
                <label class="block">
              
                  <input type="file" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100
                  "/>
                </label>
              </form>
              
          
          
            
            </div>
          
             </div>
          
          </div>
         
          
          
          <div class="flex flex-col mx-auto max-w-lg mb-10 -mt-24 p-2 md:-mt-2 md:w-1/2 border border-slate-800 shadow-lg rounded-md">
              
              <div class="mx-auto p-8">
                  <div class="border-b border-gray-900/10 pb-12">
                    
                  
                    <div class="text-center -mr-10 -ml-10 -mt-10 h-24 bg-gradient-to-tr from-blue-600 to-purple-500">
                      <h2 class="text-base font-semibold leading-7 pb-6 "><h1 class="text-2xl font-bold text-white">Resit</h1></h2>
                     
                    </div> 
  
  
  
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                        <div class="mt-2">
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
                
                      <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Other names</label>
                        <div class="mt-2">
                          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
                
                      <div class="sm:col-span-4">
                        <label for="programme" class="block text-sm font-medium leading-6 text-gray-900">Programme</label>
                        <div class="mt-2">
                          <input id="programme" name="programme" type="programme" autocomplete="programme" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
  
  
                      <div class="sm:col-span-2">
                        <label for="level" class="block text-sm font-medium leading-6 text-gray-900">Level</label>
                        <div class="mt-2">
                          <input type="text" name="level" id="level" autocomplete="level" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
  
                      </div>
                
                      <div class="sm:col-span-3">
                        <label for="session" class="block text-sm font-medium leading-6 text-gray-900">Session</label>
                        <div class="mt-2">
                          <select id="session" name="session" autocomplete="session" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 text-center">
                            <option>Morning</option>
                            <option>Evening</option>
                            <option>Weekend</option>
                          </select>
                        </div>
                      </div>
  
  
                      <div class="sm:col-span-2">
  
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Student-ID</label>
                        <div class="mt-2">
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
                
                      <div class="col-span-full">
                        <label for="campus" class="block text-sm font-medium leading-6 text-gray-900">Campus</label>
                        <div class="mt-2">
                          <input type="text" name="campus" id="campus" autocomplete="campus" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
                
                      <div class="sm:col-span-2 sm:col-start-1">
                        <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact</label>
                        <div class="mt-2">
                          <input type="text" name="contact" id="contact" autocomplete="contact" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
                
                      <div class="sm:col-span-2">
                        <label for="dob" class="block text-sm font-medium leading-6 text-gray-900">Date of birth</label>
                        <div class="mt-2">
                          <input type="text" name="dob" id="dob" autocomplete="dob" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 text-center">
                        </div>
                      </div>
                
                      
                      
                      </div>
                      <a href="#"><button class="mt-6 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Next
                    </button></a>
                       </div>
                    </div>
                    </div>
                    
                  </div>
                  </div>
                  
                  
  </x-layout>
          
          
          
          
          
          
          
          