<x-layout>

    <div class="container mx-auto flex flex-col p-8 md:flex-row">
        <div class="flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <img src={{ asset('./images/identify-svgrepo-com.svg') }} style="height: 250px;" alt="">
            <h1 class="p-8 text-xl font-bold">Disclaimer</h1>
            <div class="-mt-20 items-center p-16 text-xs text-gray-400">
                <p>You must be identified to certify that the information provided is true.</p>

            </div>

        </div>

        <div
            class="mx-auto mb-10 -mt-24 flex max-w-lg flex-col rounded-md border border-slate-800 p-2 shadow-lg md:-mt-2 md:w-1/2">

            <div class="mx-auto p-8">

                @foreach ($transcripts as $transcript )
                    
  
                <form action="/user/edit_page_2/{user}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            <h1 class="text-2xl font-bold">Identification</h1>
                        </h2>
                        <p class="mt-1 text-xs leading-6 text-gray-400">Use a valid ID card to avoid rejection</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="id_type"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Type of
                                    Identification</label>
                                <select id="id_type" name="id_type" value="{{$transcript->id_type}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>
                                    <option value="Ghana_Card">Ghana Card</option>
                                    <option value="Voters_ID">Voters ID</option>
                                    <option value="Drivers_License">Drivers License</option>
                                    <option value="NHIS">NHIS</option>
                                    <option value="Passport">Passport</option>
                                </select>
                                
                                     @error('id_type')
                                     <p class="mt-1
                                    bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                    @enderror

                            </div>

                            <div class="sm:col-span-3">
                                <label for="id_number"
                                    class="block text-sm font-medium leading-6 text-gray-900">Identification card
                                    number</label>

                                <input type="text" name="id_number" value="{{ $transcript->id_number }}"
                                   
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('id_number')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="sm:col-span-4">

                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="user_avatar">ID file (pdf only. 5mb max)</label>
                                <input
                                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" name="pdf"
                                    value="{{ old('pdf') }}"> 

                                     @error('pdf')
                                     <p class="mt-1
                                    bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                    @enderror

                            <div class="mt-1">
                                <div class="text-xs text-gray-500 dark:text-gray-300">
                                    NB:
                                    Provide a pdf copy of the biodata page of your ID card (This page should contain
                                    your name, your picture and the picture of your ID card)

                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="/user/edit_page_1/{user}"><button type="button"
                            class="mb-4 mt-6 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Back
                        </button></a>

                    <a href="/user/edit_page_3{user}"><button
                            class="mb-4 mt-6 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Next
                        </button></a>

                </div>
        </div>
    </div>
    </form>
    @break   
                  @endforeach
                
    <!-- CARD ENDS -->

</div>
</div>

</x-layout>
