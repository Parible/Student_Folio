<x-layout>

    <div class="container mx-auto flex flex-col p-8 md:flex-row">
        <div class="flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <img src="{{ asset('./images/i-exam-multiple-choice-svgrepo-com (1).svg') }}" class="ml-8" style="height: 250px;" alt="">
            <h1 class="p-8 text-xl font-bold">Resit Exam</h1>
            <div class="-mt-20 items-center p-16 text-sm text-gray-400">

                <div class="text-xs">
                {{-- <p>Size: less than 1mb</p> --}}
                
            </div>
                
                <div class="mt-10">

                   

                </div>

            </div>

        </div>

            {{-- PAGE 1 --}}
        <div
            class="mb-10 -mt-24 flex max-w-lg flex-col rounded-md border border-slate-800 p-2 shadow-lg md:mx-auto md:-mt-2 md:w-1/2">

            <div class="p-8">
                <div class="border-b border-gray-900/10 pb-12">

                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        {{-- <img class="h-6 w-6" src="{{ asset('/images/svgs/student-svgrepo-com.svg')}}" alt=""> --}}
                        <h1 class="text-2xl font-bold">Re-sit Registration Form</h1>
                    </h2>
                    <p class="mt-1 text-xs leading-6 text-gray-400">Complete application form clearly</p>

                    {{-- FORM START --}}
                    <form enctype="multipart/form-data" action="/resit-1" method="POST">

                            @csrf

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">First
                                name</label>
                            <div class="mt-2">
                                <input type="text" name="firstname" id="firstname" autocomplete="given-name"
                                    placeholder="Eg. Vivian" value="{{old('firstname')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('firstname')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Other
                                names</label>
                            <div class="mt-2">
                                <input type="text" name="lastname" id="lastname" placeholder="Eg. Korkor Amisemeku"
                                    autocomplete="family-name" value="{{old('lastname')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('lastname')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">Other names field is
                                        required</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                           <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                </label>
                            <div class="mt-2">
                                <input type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}" placeholder="*****@gmail.com"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('email')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                           
                        </div>


                        

                        <div class="sm:col-span-2">
                            <label for="sid" class="block text-sm font-medium leading-6 text-gray-900">Student
                                ID</label>
                            <div class="mt-2">
                                <input type="text" name="sid" id="sid" autocomplete="sid"
                                    placeholder="Eg. 22112200** " value="{{old('sid')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('sid')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-full -mt-4">
                            <label for="department"
                                class="block text-sm font-medium leading-6 text-gray-900">Name of Department</label>
                            <div class="mt-2">
                                <select name="department" id="department" autocomplete="campus" value="{{old('department')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>
                                    <option value="focis"{{old('department') == 'focis' ? 'selected' : ''}}>FOCIS</option>
                                    
                                   
                                </select>
                                @error('department')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="contact"
                                class="block text-sm font-medium leading-6 text-gray-900">Telephone</label>
                            <div class="mt-2">
                                <input type="text" name="contact" id="contact" autocomplete="tel" value="{{old('contact')}}" placeholder="0546798456"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('contact')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                           
                            <label for="programme" 
                                class="block text-sm font-medium leading-6 text-gray-900">Programme</label>
                            <div class="mt-2">
                                <select id="programme" name="programme" autocomplete="programme" value="{{old('programme')}}" placeholder="Eg. Bsc Computer Science"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>
                                    <option value="CE" {{ old('programme') == 'CE' ? 'selected' : '' }}>BSc. Computer Engineering</option>
                                     <option value="BIT" {{ old('programme') == 'BIT' ? 'selected' : '' }}>Bsc. Information Technology</option>
                                     <option value="MC" {{ old('programme') == 'MC' ? 'selected' : '' }}>BSc. Mobile Computing</option>
                                     <option value="SE" {{ old('programme') == 'SE' ? 'selected' : '' }}>BSc. Software Engineering</option>
                                     <option value="DCS" {{ old('programme') == 'DCS' ? 'selected' : '' }}>Diploma in Cyber Security</option>
                                     <option value="DIT" {{ old('programme') == 'DIT' ? 'selected' : '' }}>Diploma in Information Technology</option>
                                </select>
                                @error('programme')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    


                </div>
            </div>
        </div>
      

    </div>
    </div>


    {{-- PAGE 1 ENDS --}}











        {{-- PAGE 3 BEGINS --}}

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
    .check:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .check input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .check input:checked~.checkmark:after {
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

    p {
        margin-bottom: 3px;
    }
</style>



    <div class="container flex flex-col p-8 md:flex-row">
        <div class="mt-10 flex max-w-md flex-col items-center p-8 pt-2">

            <img src={{ asset('./images/request-svgrepo-com.svg') }} style="height: 200px;" alt="">
            <h1 class="p-8 text-xl font-bold">Course Description</h1>
            <div class="-mt-20 items-center p-16 text-sm text-gray-500">
               
                <p>Provide accurate deatails for all fields</p>
            </div>

        </div>


            {{-- PAGE 2 --}}
        <div
            class="mb-10 -mt-24 flex max-w-full flex-col rounded-md border border-slate-800 p-2 shadow-lg md:mx-auto md:-mt-2 md:w-1/2">

            <div class="p-8">
                <div class="border-b border-gray-900/10 pb-12">

                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        {{-- <img class="h-6 w-6" src="{{ asset('/images/svgs/student-svgrepo-com.svg')}}" alt=""> --}}
                        <h1 class="text-2xl font-bold">Course Details</h1>
                    </h2>
                    <p class="mt-1 text-xs leading-6 text-gray-400">Complete application form clearly</p>

                    {{-- FORM START --}}

                    <div class="mt-10">
                      
<table id="courseTable" class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-3 px-4 text-left">Course Code</th>
                    <th class="py-3 px-4 text-left">Academic Year</th>
                    <th class="py-3 px-4 text-left">Course Title</th>
                    <th class="py-3 px-4 text-left">Name of Lecturer</th>
                </tr>
            </thead>
            <tbody>
                
                <!-- Initial rows -->
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-4"><input type="text" autocomplete="none" class="w-full bg-transparent border-none" name="course_code" placeholder="eg. IT 414">
                     @error('course_code')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">*</p>
                                @enderror</td>


                    <td class="py-3 px-4"><input type="text" autocomplete="none" class="w-full bg-transparent border-none" name="academic_year" placeholder="eg. 2022-2023">
                     @error('academic_year')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">*</p>
                                @enderror</td>


                    <td class="py-3 px-4"><input type="text" autocomplete="none" class="w-full bg-transparent border-none" name="course_title" placeholder="eg. African Studies">
                     @error('programme')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">*</p>
                                @enderror</td>

                    <td class="py-3 px-4"><input type="text" autocomplete="none" class="w-full bg-transparent border-none" name="name_of_lecturer" placeholder="Mr. Caleb Nyarko">
                     @error('name_of_lecturer')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">*</p>
                                @enderror</td>
                </tr>
            </tbody>
        </table>
        <div dir="rtl">
        <button id="addRowBtn" type="button" class=" mt-4 px-4 py-2 bg-blue-500 text-white rounded">+Add</button>
        </div>
    


                </div>
                {{-- FORM ENDS --}}
            </div>
        </div>
      

    </div>
    </div>






    </div>

        {{-- PAGE 3 ENDS     --}}



    {{-- PAYMENT --}}


    

    <div class="container mx-auto flex flex-col p-16 md:flex-row">

        <div class="flex max-w-md flex-col items-center p-8 pt-2">

            <div class="-mt-10 max-w-md p-8">

                <img class="h-64 w-86" src={{ asset('./images/payment-card-svgrepo-com.svg') }} alt="">

                <h1 class="mx-auto p-8 text-xl font-bold"><i>Momo Pay</i></h1>
                <div class="mx-auto -mt-10 items-center p-8 text-sm text-gray-500">
                    <p>Use your full name as reference</p>
                    <p class="text-red-500">NB:Your request will automatically be rejected upon failure to make
                        full payment </p>

                </div>

            </div>

        </div>

        <div
            class="mx-auto mb-10 -mt-24 flex max-w-lg flex-col rounded-md border border-slate-800 shadow-lg md:-mt-2 md:w-1/2">

            <div class="p-10">
                <div class="border-b border-gray-900/10 pb-12">
                   <h2 class="text-base font-semibold leading-7 text-gray-900">
                            <h1 class="text-2xl font-bold">Payment</h1>
                        </h2>
                        <p class="text-gray-500">Use your full name as reference </p>
                        

                        {{-- PAYMENT START --}}
                            <div class="mb-3">
                                <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Enter Transaction
                                    ID</label>
                                
                                    <input
                                        class="mb-1 w-full rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none"
                                       name="transaction_id" value="{{old('transaction_id')}}" placeholder="Eg. 25571768954" type="text" />
                                       @error('transaction_id')
                                            <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                  
                                       @enderror
                    
                                     <p class="text-xs text-gray-500">Copy and paste the <b>transaction</b> ID to provide further proof of payment</p>
                                

                            </div>
                            {{-- PAYMENT ENDS --}}
 

                                {{-- <a href="/page-3"><button type="button"
                                        class="mb-4 mt-6 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Back
                                    </button></a> --}}

                                <button type="submit"
                                        class="mb-4 mt-6 w-48 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Submit & Review
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





            
        </div>
    </div>

    </div>

    </div>

    </div>
    </div>
    </div>

    <!-- CARD ENDS -->
    </div>
    </div>
                        {{-- END PAYMENT --}}






    
</x-layout>













{{-- 

      <div class="sm:col-span-3">
                            <label for="course_code" class="block text-sm font-medium leading-6 text-gray-900">Course Code
                                </label>
                            <div class="mt-2">
                                <input type="text" name="course_code" id="course_code" 
                                    placeholder="Eg. IT 414" value="{{old('course_code')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('course_code')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="academic_year" class="block text-sm font-medium leading-6 text-gray-900">Academic Year
                                </label>
                            <div class="mt-2">
                                <input type="text" name="academic_year" placeholder="Eg. 2022/2023"
                                  value="{{old('lastname')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('academic_year')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">Other names field is
                                        required</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                           <label for="course_title" class="block text-sm font-medium leading-6 text-gray-900">Course Title
                                </label>
                            <div class="mt-2">
                                <input type="text" name="course_title" id="course_title"  value="{{old('course_title')}}" placeholder="Eg. African Studies"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('course_title')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                           
                        </div>


                        

                       

                        <div class="col-span-full -mt-4">
                             <label for="name_of_lecturer" class="block text-sm font-medium leading-6 text-gray-900">Name of Previous Lecturer
                                </label>
                            <div class="mt-2">
                                <input type="text" name="name_of_lecturer" id="name_of_lecturer"  value="{{old('name_of_lecturer')}}" placeholder="Eg. African Studies"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('name_of_lecturer')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> --}}
