<x-layout>

    <div class="container mx-auto flex flex-col p-8 md:flex-row">

        <div class="flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <div class="mx-auto -mt-10 max-w-md p-16">

                @foreach ($transcripts->sortByDesc('created_at')->take(1) as $transcript)
                    <img class="h-32 w-64 rounded-lg drop-shadow-lg"
                        src="{{ $transcript->image ? asset('storage/' . $transcript->image) : asset('./images/avatar-default-svgrepo-com.svg') }}"
                        style="height: 250px;" alt="">
                @endforeach

                <h1 class="mx-auto p-2 text-xl font-bold"> Passport Picture</h1>
                <div class="mx-auto items-center p-2 text-sm text-gray-500">

                </div>

            </div>

        </div>

        <div
            class="mx-auto mb-10 -mt-24 flex max-w-lg flex-col rounded-md border border-slate-800 shadow-lg md:-mt-2 md:w-1/2">

            <div class="p-10">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-6 space-y-2">

                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            <h1 class="text-2xl font-bold">Review</h1>
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Verify your details to avoid rejection</p>

                        @foreach ($transcripts->sortByDesc('created_at')->take(1) as $transcript)
                            <h6 class="font-bold">Personal-Information</h6>

                            <div class="py-2">
                                <span>First Name: </span> <span
                                    class="text-blue-500">{{ $transcript->firstname }}</span><br>
                                <span>Other Names: </span> <span
                                    class="text-blue-500">{{ $transcript->lastname }}</span><br>
                                <span>Student ID:</span> <span class="text-blue-500">{{ $transcript->sid }}</span><br>
                                <span>Programme: </span> <span
                                    class="text-blue-500">{{ $transcript->programme }}</span><br>
                                <span>Session: </span> <span class="text-blue-500">{{ $transcript->session }}</span><br>
                                <span>Level: </span> <span class="text-blue-500">{{ $transcript->level }}</span><br>
                                <span>Contact: </span> <span class="text-blue-500">{{ $transcript->contact }}</span><br>
                                <span>Date Of Birth: </span>
                                <span class="text-blue-500">{{ $transcript->dob }}</span><br>
                                <span>Campus: </span> <span class="text-blue-500">{{ $transcript->campus }}</span><br>
                            </div>
                        @break
                    @endforeach

                    <hr class="mt-4">

                    <div class="mt-6 space-y-2">

                        @foreach ($transcripts->sortByDesc('created_at')->take(1) as $transcript)
                            <h6 class="font-bold">Identification</h6>
                            <div class="py-2">
                                <span>Type of ID Card: </span> <span
                                    class="font-bold text-blue-500">{{ $transcript->id_type }}</span><br>
                                <span>ID Card Number: </span> <span
                                    class="font-bold text-blue-500">{{ $transcript->id_number }}</span><br>
                                {{-- <span>Destination Address:  </span> <span>{{ $transcript->address }}</span><br> --}}
                                <span>Type of Request(s): </span> <span
                                    class="font-bold text-blue-500">{{ $transcript->request_type }}</span><br>
                                <span >Transaction ID: <span  class="font-bold text-blue-500">{{$transcript->transaction_id}}</span> </span> 
                                    
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

            <a href="/payment"><button type="button"
                    class="mb-4 mt-6 transform rounded-lg  bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Back
                </button></a>

            <a href="/payment"><button
                    class="mb-4 mt-6 transform rounded-lg  bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Proceed to Payment
                </button></a>

        </div>
    </div>
</div>

<!-- CARD ENDS -->
</div>
</div>

</x-layout>
