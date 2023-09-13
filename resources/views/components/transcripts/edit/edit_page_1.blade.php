<x-layout>

    <div class="container mx-auto flex flex-col p-8 md:flex-row">
        <div class="flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <img src="{{ asset('./images/avatar-default-svgrepo-com.svg') }}" style="height: 250px;" alt="">
            <h1 class="p-8 text-xl font-bold"> Image Requirements</h1>
            <div class="-mt-20 items-center p-16 text-sm text-gray-400">
                <div class="text-xs">
                <p>Size: less than 1mb</p>
                <p>Resolution: 1:1(eg. 200*200)</p>
                <p>Accepted Image type files: jpg or jpeg</p>
            </div>
            
                
          
                
                <div class="mt-10">

                    <h1 class="text-1xl font-bold text-black">Passport Picture</h1>
                    <p class="mt-2">Upload a file</p>
                    <div class="mt-2 flex items-center space-x-6">

                        @foreach ($transcripts as $transcript )
                            
                       
                        <form enctype="multipart/form-data" action="/user/edit_page_1" method="POST">

                            {{-- action="/user/edit_page_1/{{$transcript->id}} --}}
                            @csrf
                            "@method('PUT')"
                            <label for="image" class="block">

                                <input type="file" name="image" 
                                    class="block w-full text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-violet-50 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-violet-700 hover:file:bg-violet-100" />
                            </label>
                            @error('image')
                                <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                            @enderror
                    </div>

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
                        <h1 class="text-2xl font-bold">Personal Information</h1>
                    </h2>
                    <p class="mt-1 text-xs leading-6 text-gray-400">Complete application form clearly</p>

                    {{-- FORM START --}}
                   
                        
                  
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">First
                                name</label>
                            <div class="mt-2">
                                <input type="text" name="firstname" id="firstname" autocomplete="given-name"
                                    placeholder="Eg. Vivian" value="{{$transcript->firstname}}"
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
                                    autocomplete="family-name" value="{{$transcript->lastname}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('lastname')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">Other names field is
                                        required</p>
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

                        <div class="sm:col-span-2">
                            <label for="level"
                                class="block text-sm font-medium leading-6 text-gray-900">Level</label>
                            <div class="mt-2">
                                <select  name="level" id="level"  value="{{old('level')}}" placeholder="100"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                           <option value="">--Choose--</option>
                        
                                    <option value="100" {{ old('level') == '100' ? 'selected' : '' }}>100</option>
                                    <option value="200" {{ old('level') == '200' ? 'selected' : '' }}>200</option>
                                    <option value="300" {{ old('level') == '300' ? 'selected' : '' }}>300</option>
                                    <option value="400" {{ old('level') == '400' ? 'selected' : '' }}>400</option>
                                    <option value="Graduate" {{ old('level') == 'Graduate' ? 'selected' : '' }}>Graduate</option>

            
                                </select>
                                @error('level')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="sm:col-span-3">
                            <label for="session"
                                class="block text-sm font-medium leading-6 text-gray-900">Session</label>
                            <div class="mt-2">
                                <select  name="session" id="session" value="{{old('session')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>
                                    <option value="Morning" {{ old('session') == 'Morning' ? 'selected' : '' }}>Morning</option>
                                    <option value="Evening" {{ old('session') == 'Evening' ? 'selected' : '' }}>Evening</option>
                                    <option value="Weekend" {{ old('session') == 'Weekend' ? 'selected' : '' }}>Weekend</option>
                                </select>
                                 @error('session')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="sid" class="block text-sm font-medium leading-6 text-gray-900">Student
                                ID</label>
                            <div class="mt-2">
                                <input type="text" name="sid" id="sid" autocomplete="sid"
                                    placeholder="Eg. 22112200** " value="{{$transcript->sid}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('sid')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-full -mt-4">
                            <label for="campus"
                                class="block text-sm font-medium leading-6 text-gray-900">Campus</label>
                            <div class="mt-2">
                                <select name="campus" id="campus" autocomplete="campus" value="{{old('campus')}}" placeholder="Eg. Tesano"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>
                                    <option value="Tesano" {{ old('campus') == 'Tesano' ? 'selected' : '' }}>Accra Main Campus (Tesano)</option>
                                    <option value="Kumasi" {{ old('campus') == 'Kumasi' ? 'selected' : '' }}>Kumasi</option>
                                    <option value="Koforidua" {{ old('campus') == 'Koforidua' ? 'selected' : '' }}>Koforidua</option>
                                    <option value="Tesano" {{ old('campus') == 'Tesano' ? 'selected' : '' }}>Tesano</option>
                                   
                                </select>
                                @error('campus')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="contact"
                                class="block text-sm font-medium leading-6 text-gray-900">Contact</label>
                            <div class="mt-2">
                                <input type="text" name="contact" id="contact" autocomplete="tel" value="{{$transcript->contact}}" placeholder="0546798456"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('contact')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="dob" class="block text-sm font-medium leading-6 text-gray-900">Date
                                of birth</label>
                            <div class="mt-2">
                                <input type="date" name="dob" id="dob" autocomplete="bday" value="{{$transcript->dob}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('dob')
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



    <div class="container mx-auto flex flex-col p-8 md:flex-row">
        <div class="mt-10 flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <img src={{ asset('./images/request-svgrepo-com.svg') }} style="height: 200px;" alt="">
            <h1 class="p-8 text-xl font-bold">Type of Request</h1>
            <div class="-mt-20 items-center p-16 text-sm text-gray-500">
                <p>Select apprioprately.</p>
                <p>You can choose as many as applicable</p>
            </div>

        </div>

        <div
            class="mx-auto mb-10 -mt-24  flex max-w-lg flex-col rounded-md border border-slate-800 shadow-lg md:-mt-2 md:w-1/2">

            <div class="w-full">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="relative overflow-x-auto sm:rounded-lg">

                        {{-- FORM STARTS --}}
                      
                             <table class="text-left text-xs text-gray-500 dark:text-gray-400 md:text-sm">
                                <thead class="bg-gradient-to-tr from-blue-600 to-purple-500 text-sm text-white">
                                    <tr>
                                        <th scope="col" class="p-2 py-4">
                                            Check
                                        </th>
                                        <th scope="col" class="px-6 ">
                                            Request Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Fee
                                        </th>

                                </thead>
                                <tbody>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="loa" data-price="10"
                                                        id="loa">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                            name="loa">
                                            Letter of Attestation
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="tr" data-price="20"
                                                        id="tr">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                            name="tr">
                                            Transcript-Regular
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;20
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="trac" data-price="10"
                                                        id="trac">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Transcript-Regular(Additional Copy)
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                        </td>
                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="te" data-price="30"
                                                        id="te">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Transcript-Express

                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;30
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="teac" data-price="15"
                                                        id="teac">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Transcript-Express(Additional Copy)
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;15
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="vl" data-price="10"
                                                        id="vl">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Verification Letter
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="auth_of_cert" data-price="3"
                                                        id="auth_of_cert">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Authentication of Certificate(Per Copy)
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;3
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="loi" data-price="10"
                                                        id="loi">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Letter of Introduction(Visa)(Active Student Only)
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="loi_so" data-price="10"
                                                        id="loi_so">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            General Letter of Introduction(Active Students Only)
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                    </tr>
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="epl"  data-price="10"
                                                        id="epl">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            English Proficiency Letter
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                    </tr>
                                    {{-- <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="ro_id"  data-price="10"
                                                        id="ro_id">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Replacement of ID Cards
                                        </th>
                                        <td class="px-6 py-4" >
                                             &#8373;10
                                        </td>

                                    </tr> --}}
                                
                                       

                                </tbody>
                            </table>
                    </div>
                </div>

                {{-- <div class="ml-6">
                <a href="/page-2"><button type="button"
                        class="mb-4 mt-6 transform rounded-lg  bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Back
                    </button></a>

                <a href="/page-4"><button
                        class="ml-4 mb-4 mt-6 transform rounded-lg  bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Proceed to Payment
                    </button></a>
                    </div>   --}}

            </div>
        </div>
    </div>
  
    <!-- CARD ENDS -->
    </div>
    </div>

        {{-- PAGE 3 ENDS     --}}



    {{-- PAYMENT --}}


    

    <div class="container mx-auto flex flex-col p-16 md:flex-row">

        <div class="flex max-w-md flex-col items-center p-8 pt-2">

            <div class="-mt-10 max-w-md p-8">

                <img class="h-32 w-64" src={{ asset('./images/mtn_momo.png') }} alt="">

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

                    <div class="mt-6 space-y-2">

                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            <h1 class="text-2xl font-bold">Payment & Checkout</h1>
                        </h2>
                        <p class="text-gray-500">Use your full name as reference </p>
                        
                        
                        {{-- TOTAL PRICE --}}
                        <div class="text-2xl font-bold" id="total">Total: </div>
                              <p>Make payment to <span class="font-bold">+233 500651223/ +233 549627401 </span> </p>

                                 {{-- <form action="/payment" method="POST">
                                @csrf --}}

                            <div class="mb-3">
                                <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Enter Transaction
                                    ID</label>
                                
                                    <input
                                        class="mb-1 w-full rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none"
                                       name="transaction_id" value="{{$transcript->transaction_id}}" placeholder="Eg. 25571768954" type="text" />
                                       @error('transaction_id')
                                            <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                  
                                       @enderror
                    
                        <p class="text-xs text-gray-500">Copy and paste the <b>transaction</b> ID to provide further proof of payment</p>
                                

                            </div>
                        </div>
                       
                                {{-- <a href="/page-3"><button type="button"
                                        class="mb-4 mt-6 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Back
                                    </button></a> --}}

                                <button type="submit"
                                        class="mb-4 mt-6 w-48 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Submit & Review
                                    </button>
                            </form>
                            @break
                             @endforeach
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
