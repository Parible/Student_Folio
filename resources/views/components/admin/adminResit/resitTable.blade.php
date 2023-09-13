<x-adminLayout>

    <div class="grid w-full grid-cols-1 gap-4 bg-white p-6 pt-24 md:grid-cols-2 xl:grid-cols-3">
        <div class="rounded-lg bg-gradient-to-tr from-indigo-700 to-purple-700 p-4 shadow sm:p-6 xl:p-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-white sm:text-3xl">0</span>
                    <h3 class="text-base font-normal text-white">Number of Requests</h3>
                </div>

            </div>
        </div>
        <div class="rounded-lg bg-gradient-to-tr from-indigo-700 to-purple-700 p-4 shadow sm:p-6 xl:p-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-white sm:text-3xl"> 0</span>
                    <h3 class="text-base font-normal text-white">Number of Users</h3>
                </div>

            </div>
        </div>

        <div class="rounded-lg bg-gradient-to-tr from-indigo-700 to-purple-700 p-4 shadow sm:p-6 xl:p-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-white sm:text-3xl">0</span>
                    <h3 class="text-base font-normal text-white">User signups this week</h3>
                </div>

            </div>

        </div>
    </div>

    {{-- 

    <form action="/admin">
  <div class="relative border-2 border-gray-100 m-4 rounded-lg">
    <div class="absolute top-4 left-3">
      <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
    </div>
    <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
      placeholder="Search Laravel Gigs..." />
    <div class="absolute top-2 right-2">
      <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
        Search
      </button>
    </div>
  </div>
</form> --}}
    {{-- <a href="/admin/reviewed"><button
        class="mx-8 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300">Reviewed Requests</button></a> --}}

        <span class="px-8 text-4xl font-bold text-blue-400 drop-shadow-xl">Re-sit</span>
    <!-- ====== Table Section Start -->
    <section class="-mt-24 bg-white py-20 lg:py-[120px]">
        <div class="container">
            <div class="-mx-16 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gradient-to-tr from-indigo-700 to-purple-700 text-center">
                                    <th
                                        class="w-1/12 min-w-[80px] border-l border-transparent text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        First Name
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                         Other Names
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Programme
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Email
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Department
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Student ID
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Course Code
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Course Title
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Academic Year
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[100px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Lecturer's Name
                                    </th>
                                 
                                    {{-- <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                       Request(s)
                                    </th>
                                     --}}
                                   
                                        {{-- <th
                                            class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                            Total Amount
                                        </th>
                                        <th
                                            class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                            Transaction ID
                                        </th>
                                        <th
                                            class="w-2/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                            Upload Document
                                        </th> --}}
                                    {{-- <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Send to User
                                    </th> --}}

                                </tr>
                            </thead>

                            <tbody>

                                {{-- @unless ($resits->isEmpty()) --}}
                                    @foreach ($resits->sortByDesc('created_at') as $resit)
                                        {{-- <tr> --}}
                                            {{-- <td
                                                class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] py-2 px-8 text-center text-sm text-base font-medium">

                                                <img class=""
                                                    src="{{ $transcript->image ? asset('storage/' . $transcript->image) : asset('./images/avatar-default-svgrepo-com.svg') }}"
                                                    alt="">
                                                <a href="{{ asset('storage/' . $transcript->image) }}" target="_blank"
                                                    class="text-xs text-blue-500">View</a>

                                            </td> --}}
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-white py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->firstname }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->lastname }}
                                            </td>
                                            <td
                                                class="text-dark text border-b border-[#E8E8E8] bg-white py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->programme }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->email }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->department }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->sid }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->course_code }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->course_title }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->academic_year }}
                                            </td>
                                            
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $resit->name_of_lecturer }}
                                            </td>
                                            
                                            {{-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                <a href="{{ asset('storage/' . $transcript->pdf) }}" target="_blank"
                                                    class="text-blue-500">View Bio Data</a>

                                            </td> --}}
                                            {{-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">
                                                $10.00
                                            </td> --}}
                                            {{-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">
                                                  {{ $resit->transaction_id }}
                                            </td> --}}

                                            {{-- Upload File  --}}
                                            {{-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">

                                             
                                                    <form enctype="multipart/form-data" action="/admin" method="POST">

                                                        @csrf
                                                        <label for="pdf" class="block">

                                                            <input type="file" name="pdf" 
                                                                class="block w-full rounded-full text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-blue-50 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-violet-700 hover:file:bg-violet-100" />
                                                        </label>
                                                        
                                                    
                                               
                                                
                                     

                                            </td> --}}
                                            {{-- <td
                                            <button >
                                              <a href="submit" class="text-dark text-blue-800 border-b border-[#E8E8E8] bg-blue-100 py-2 px-2 text-center text-base font-medium">
                                               SUBMIT
                                            </td>
                                        </button></a>
                                        </form> --}}


                                        
                                        
                                    @endforeach
                                {{-- @else
                                    <p class="text-2xl font-bold text-red-500"> No data found 😒 </p>
                                @endunless --}}

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>






















    
    {{-- <div class="sm:px-6 w-full">

            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Tasks</p>
                    <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                        <p>Sort By:</p>
                        <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                            <option class="text-sm text-indigo-800">Latest</option>
                            <option class="text-sm text-indigo-800">Oldest</option>
                            <option class="text-sm text-indigo-800">Latest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="sm:flex items-center justify-between">
                    <div class="flex items-center">
                        <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                            <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                <p>All</p>
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                <p>Done</p>
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                <p>Pending</p>
                            </div>
                        </a>
                    </div>
                    <button onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <p class="text-sm font-medium leading-none text-white">Add Task</p>
                    </button>
                </div>
                <div class="mt-7 overflow-x-auto"> --}}

    {{--  TABLE STARTS --}}
    {{-- 
                    <table class="w-full whitespace-nowrap">
                        <tbody>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                            <input placeholder="checkbox" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">Marketing Keynote Presentation</p>
                                      
                                    </div>
                                </td>


                                <td class="pl-24">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">Urgent</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">04/07</p>
                                    </div>
                                </td>

                                <td class="pl-5">
                                    <div class="flex items-center">
                                       
                                        <p class="text-sm leading-none text-gray-600 ml-2">23</p>
                                    </div>
                                </td>

                            
                                <td class="pl-5">
                                    <div class="flex items-center">
                                     
                                        <p class="text-sm leading-none text-gray-600 ml-2">04/07</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <button class="py-3 px-3 text-sm focus:outline-none leading-none text-gray-600 bg-gray-100 rounded">Due today at 18:00</button>
                                </td>
                                <td class="pl-4">
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                                </td>
                                <td>
                                    <div class="relative px-5 pt-2">
                                       
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        </table> --}}
    {{-- TABLE ENDS --}}

</x-adminLayout>
<!-- ====== Table Section End -->
