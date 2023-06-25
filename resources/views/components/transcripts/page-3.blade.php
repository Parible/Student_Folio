
<style>
  .check {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  
  /* Hide the browser's default checkbox */
  .check input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }
  
  /* Create a custom checkbox */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
  }
  
  /* On mouse-over, add a grey background color */
  .check:hover input ~ .checkmark {
    background-color: #ccc;
  }
  
  /* When the checkbox is checked, add a blue background */
  .check input:checked ~ .checkmark {
    background-color: #2196F3;
  }
  
  /* Create the checkmark/indicator (hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }
  
  /* Show the checkmark when checked */
  .check input:checked ~ .checkmark:after {
    display: block;
  }
  
  /* Style the checkmark/indicator */
  .check .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

p{
    margin-bottom:3px;
   
}
</style>



<x-layout>




    
    <div class="container flex flex-col mx-auto p-8 md:flex-row">
      <div class="flex flex-col mt-10 pt-2 p-16 items-center max-w-md p-8">
              
   
              <img src={{ asset('./images/request-svgrepo-com.svg') }} style="height: 200px;" alt="">
             <h1 class="p-8 font-bold text-xl">Type of Request</h1>
             <div class="p-16 -mt-20 items-center text-gray-500 text-sm">
              <p>Select apprioprately.</p>
              <p>You can choose as many as applicable</p>
            </div>
         
          
          
          
           
          
          </div>
         
  
  
  









        
<div class="flex flex-col mx-auto max-w-lg mb-10 -mt-24 md:-mt-2 md:w-1/2 border border-slate-800 shadow-lg rounded-md" >
            
  <div class="mx-auto">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="relative overflow-x-auto sm:rounded-lg ">
      <table class="text-xs md:text-sm  text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-white  bg-gradient-to-tr from-blue-600 to-purple-500 ">
            <tr>
                <th scope="col" class="p-2">
                   Check
                </th>
                <th scope="col" class="px-6 py-3">
                  Request Type
                </th>
                <th scope="col" class=" px-6 py-3">
                    Fee
                </th>
               
        </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center mb-2">
                                  <label class="check">
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                  </label>
                                     </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Letter of Attestation
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                         
              
              
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Transcript-Regular
                            </th>
                            <td class="px-6 py-4">
                              &#8373;20
                            </td>
                          
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Transcript-Regular(Additional Copy)
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                          
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Transcript-Express
              
                            </th>
                            <td class="px-6 py-4">
                              &#8373;30
                            </td>
                          
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Transcript-Express(Additional Copy)
                            </th>
                            <td class="px-6 py-4">
                              &#8373;15
                            </td>
                           
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Verification Letter
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                           
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Authentication of Certificate(Per Copy)
                            </th>
                            <td class="px-6 py-4">
                              &#8373;3
                            </td>
                            
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Letter of Introduction(Visa)(Active Student Only)
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                           
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              General Letter of Introduction(Active Students Only)
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                           
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              English Proficiency Letter
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                           
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Replacement of ID Cards
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                           
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                              <div class="flex items-center mb-2">
                                <label class="check">
                                  <input type="checkbox" >
                                  <span class="checkmark"></span>
                                </label>
                                   </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Others
                            </th>
                            <td class="px-6 py-4">
                              &#8373;10
                            </td>
                           
                        </tr>
                    </tbody>
                </table>
                
                    </div>
                    </div>

                    
                    <a href="/page-4"><button class="ml-6 mb-4 mt-6 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Proceed
                    </button></a>
                  </div>
                </div>
                </div>
                <!-- CARD ENDS -->
              </div>
            </div>
            

</x-layout>
