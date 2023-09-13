<x-layout>

    <div class="container mx-auto flex flex-col p-8 md:flex-row">
        <div class="flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <img src={{ asset('./images/letter-svgrepo-com.svg') }} style="height: 250px;" alt="">
            <h1 class="p-8 text-xl font-bold"> Internship Letter</h1>
            <div class="-mt-20 items-center p-16 text-sm">
                <p class="text-gray-400">Completely fill the form to generate your unique internship letter</p>
                {{-- <p>An Internship letter made for you</p> --}}
                
               

            </div>

        </div>

        <div
            class="mx-auto mb-10 -mt-24 flex max-w-lg flex-col rounded-md border border-slate-800 p-2 shadow-lg md:-mt-2 md:w-1/2">

            <div class="mx-auto p-8">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        <h1 class="text-2xl font-bold">Internship Letters</h1>
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Complete application form clearly
                    </p>

                    {{-- FORM START --}}
                    <form action="{{ route('generate-letter-pdf') }}" method="POST" >
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
                           <label for="programme" 
                                class="block text-sm font-medium leading-6 text-gray-900">Programme</label>
                            <div class="mt-2">
                                <select id="programme" name="programme" autocomplete="programme" value="{{old('programme')}}" placeholder="Eg. Bsc Computer Science"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>

                                    {{-- <option value="Bsc. in Computer Engineering" {{old('programme')=='Bsc. in Computer Engineering' ? 'selected': ''}}>BSc. Computer Engineering</option> --}}
                                    <option value="BSc. in Software Engineering" {{ old('programme') == 'BSc. in Software Engineering' ? 'selected' : '' }}>BSc. Software Engineering</option>
                                     <option value="Bsc. in Computer Engineering" {{ old('programme') == 'Bsc. in Computer Engineering' ? 'selected' : '' }}>Bsc. Computer Engineering</option>
                                     <option value="BSc. in Mobile Computing" {{ old('programme') == 'BSc. in Mobile Computing' ? 'selected' : '' }}>BSc. Mobile Computing</option>
                                     <option value="Diploma in Cyber Security" {{ old('programme') == 'Diploma in Cyber Security' ? 'selected' : '' }}>Diploma in Cyber Security</option>
                                     <option value="Diploma in Information Technology" {{ old('programme') == 'Diploma in Information Technology' ? 'selected' : '' }}>Diploma in Information Technology</option>

                                    {{-- <option value="BSc. in Mobile Computing">BSc. Mobile Computing</option> --}}
                                    {{-- <option value="BSc. in Software Engineering">BSc. Software Engineering</option> --}}
                                    {{-- <option value="Diploma in Cyber Security">Diploma in Cyber Security</option> --}}
                                    {{-- <option value="Diploma in Information Technology">Diploma in Information Technology</option> --}}
                                </select>
                                @error('programme')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                              <div class="sm:col-span-2">
                            <label for="title"
                                class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <select  name="title" id="title"  value="{{old('title')}}" placeholder="100"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                           <option value="">--Choose--</option>
                        
                                    <option value="Mr"{{old('title') == 'Mr' ? 'selected' : ''}}>Mr.</option>
                                    <option value="Mrs"{{old('title') == 'Mrs' ? 'selected' : ''}}>Mrs.</option>
                                    <option value="Miss"{{old('title') == 'Miss' ? 'selected' : ''}}>Miss</option>
                                 
                                
                                </select>
                                @error('title')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>


                          <div class="sm:col-span-4">
                            <label for="department" 
                                class="block text-sm font-medium leading-6 text-gray-900">Department</label>
                            <div class="mt-2">
                                <select id="department" name="department" autocomplete="programme"  placeholder="Eg. Bsc Computer Science"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                    <option value="">--Choose--</option>
                                     <option value="Information Technology"{{old('department') == 'Information Technology' ? 'selected' : ''}}>Information Technology</option>
                                     <option value="Computer Science"{{old('department') == 'Computer Science' ? 'selected' : ''}}>Computer Science</option>

                                   
                                </select>
                                @error('department')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="level"
                                class="block text-sm font-medium leading-6 text-gray-900">Level</label>
                            <div class="mt-2">
                                <select  name="level" id="level"  value="{{old('level')}}" 
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                           <option value="">--Choose--</option>
                        
                                    <option value="100"{{old('level') == '100' ? 'selected' : ''}}>100</option>
                                    <option value="200"{{old('level') == '200' ? 'selected' : ''}}>200</option>
                                    <option value="300"{{old('level') == '300' ? 'selected' : ''}}>300</option>
                                    <option value="400"{{old('level') == '400' ? 'selected' : ''}}>400</option>


                                </select>
                                @error('level')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
 <div class="sm:col-span-2 sm:col-start-1">
                            <label for="contact"
                                class="block text-sm font-medium leading-6 text-gray-900">Contact</label>
                            <div class="mt-2">
                                <input type="text" name="contact" id="contact" autocomplete="tel" value="{{old('contact')}}" placeholder="0546798456"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('contact')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                              <label for="type"
                                class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                            <div class="mt-2">
                                <select  name="type" id="type"  
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                           <option value="">--Choose--</option>
                        
                                            {{-- <option value="degree"{{old('type') == 'degree' ? 'selected' : ''}}>Degree</option> --}}

                                    <option value="degree"{{old('type') == 'degree' ? 'selected' : ''}}>Degree</option>
                                    <option value="diploma"{{old('type') == 'diploma' ? 'selected' : ''}}>Diploma</option>
                                  
                                    
                                </select>
                                @error('type')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                    </div>
                    <a href="submit"><button
                            class="mt-24 -ml-8 transform rounded-lg bg-blue-600 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            GenerateLetter
                        </button></a>

                        
                </div>
            </div>
        </div>
    </form>

    </div>
    </div>

</x-layout>
