<x-adminLayout>

    <div class="grid w-full grid-cols-1 gap-4 bg-white p-6 pt-24 md:grid-cols-2 xl:grid-cols-3">
        <div class="rounded-lg bg-gradient-to-tr from-indigo-700 to-purple-700 p-4 shadow sm:p-6 xl:p-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-white sm:text-3xl">{{ $requestCount }}</span>
                    <h3 class="text-base font-normal text-white">Number of Requests</h3>
                </div>

            </div>
        </div>
        <div class="rounded-lg bg-gradient-to-tr from-indigo-700 to-purple-700 p-4 shadow sm:p-6 xl:p-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-white sm:text-3xl"> {{ $userCount }}</span>
                    <h3 class="text-base font-normal text-white">Number of Users</h3>
                </div>

            </div>
        </div>

        <div class="rounded-lg bg-gradient-to-tr from-indigo-700 to-purple-700 p-4 shadow sm:p-6 xl:p-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-white sm:text-3xl">385</span>
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

{{-- 
 <a href="/admin"><button
        class="mx-8 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300">All Requests</button></a> --}}


{{-- Display Sent Requests --}}
@if(count($transcripts) > 0)
    <!-- ====== Table Section Start -->
    <section class="-mt-24 bg-white py-20 lg:py-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gradient-to-tr from-indigo-700 to-purple-700 text-center">
                                    <th
                                        class="w-1/12 min-w-[80px] border-l border-transparent text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Passport
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
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
                                        Level
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Session
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Student ID
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Campus
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Contact
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Date of Birth
                                    </th>
                                 
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Type of Request
                                    </th>
                                    
                                   
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Total Amount
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Transaction ID
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Upload Data
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent py-4 px-3 text-sm font-semibold text-white lg:py-2 lg:px-2">
                                        Date Issued
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                @unless ($transcripts->isEmpty())
                                    @foreach ($transcripts as $transcript)
                                        <tr>
                                            <td
                                                class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] py-2 px-8 text-center text-sm text-base font-medium">

                                                <img class=""
                                                    src="{{ $transcript->image ? asset('storage/' . $transcript->image) : asset('./images/avatar-default-svgrepo-com.svg') }}"
                                                    alt="">
                                                <a href="{{ asset('storage/' . $transcript->image) }}" target="_blank"
                                                    class="text-xs text-blue-500">View</a>

                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-white py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->firstname }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->lastname }}
                                            </td>
                                            <td
                                                class="text-dark text border-b border-[#E8E8E8] bg-white py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->programme }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->level }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->session }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->sid }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->campus }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->contact }}
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->dob }}
                                            </td>
                                            
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                {{ $transcript->request_type }}
                                            </td>
                                            
                                            {{-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-2 px-2 text-center text-sm text-base font-medium">
                                                <a href="{{ asset('storage/' . $transcript->pdf) }}" target="_blank"
                                                    class="text-blue-500">View Bio Data</a>

                                            </td> --}}
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">
                                                $10.00
                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">
                                                  {{ $transcript->transaction_id }}
                                            </td>

                                            {{-- Upload File  --}}
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">

                                             
                                                    <form enctype="multipart/form-data" action="/admin" method="POST">

                                                        @csrf
                                                        <label for="upload_data" class="block">

                                                            <input type="file" name="upload_data"
                                                                class="block w-full rounded-full text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-blue-50 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-violet-700 hover:file:bg-violet-100" />
                                                        </label>
                                                    
                                               
                                                
                                            {{-- Upload File Ends  --}}

                                            </td>
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">
                                               Send
                                            </td>
                                           

                                        </tr>
                                    @endforeach
                                @else
                                    <p class="text-2xl font-bold text-red-500"> No data found 😒 </p>
                                @endunless

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

</x-adminLayout>

