<x-layout>

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
                            <h1 class="text-2xl font-bold">Payment</h1>
                        </h2>
                        <p class="text-gray-500">Use your full name as reference </p>

{{-- 
                        <div class="py-2">

                           
                        </div>

                        <hr class="mt-4">

                        <div class="mt-6 space-y-2">

                            <div class="w-full border-b border-gray-200 p-3">
                                <div class="mb-5">
                                    <label for="type1" class="flex cursor-pointer items-center">
                                        <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type"
                                            id="type1" checked />
                                        <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png"
                                            class="ml-3 h-6" />
                                    </label>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Name on
                                            card</label>
                                        <div>
                                            <input
                                                class="mb-1 w-full rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none"
                                                placeholder="John Smith" type="text" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Card number</label>
                                        <div>
                                            <input
                                                class="mb-1 w-full rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none"
                                                placeholder="0000 0000 0000 0000" type="text" />
                                        </div>
                                    </div>
                                    <div class="-mx-2 mb-3 flex items-end">
                                        <div class="w-1/4 px-2">
                                            <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Expiration
                                                date</label>
                                            <div>
                                                <select
                                                    class="form-select mb-1 w-full cursor-pointer rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none">
                                                    <option value="01">01 - January</option>
                                                    <option value="02">02 - February</option>
                                                    <option value="03">03 - March</option>
                                                    <option value="04">04 - April</option>
                                                    <option value="05">05 - May</option>
                                                    <option value="06">06 - June</option>
                                                    <option value="07">07 - July</option>
                                                    <option value="08">08 - August</option>
                                                    <option value="09">09 - September</option>
                                                    <option value="10">10 - October</option>
                                                    <option value="11">11 - November</option>
                                                    <option value="12">12 - December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-1/4 px-2">
                                            <select
                                                class="form-select mb-1 w-full cursor-pointer rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none">
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                            </select>
                                        </div>
                                        <div class="w-1/4 px-2">
                                            <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Security
                                                code</label>
                                            <div>
                                                <input
                                                    class="mb-1 w-full rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none"
                                                    placeholder="000" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-3">
                                <label for="type2" class="flex cursor-pointer items-center">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type"
                                        id="type2" />
                                    <img src="{{ asset('images/mtn_momo.png') }}" width="80" class="ml-3" />
                                </label>

                            </div> --}}

                            @foreach ($transcripts as $transcript )
                                
                         
                                 <form action="/user/edit_payment/{user}" method="POST">
                                @csrf
                                @method('PUT')

                            <div class="mb-3">
                                <label class="mb-2 ml-1 text-sm font-semibold text-gray-600">Enter Transaction
                                    ID</label>
                                
                                    <input
                                        class="mb-1 w-full rounded-md border border-gray-200 px-3 py-2 transition-colors focus:border-indigo-500 focus:outline-none"
                                       name="transaction_id" value="{{$transcript->transaction_id}}" placeholder="Eg. 25571768954" type="text" />
                                       @error('transaction_id')
                                            <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                  
                                       @enderror
                    
                        <p class="text-xs text-gray-500">Copy and paste the <b>reference</b> ID to provide further proof of payment</p>
                                
                            </div>
                        </div>
                       
                                <a href="/user/edit_page_3"><button type="button"
                                        class="mb-4 mt-6 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Back
                                    </button></a>

                                <a href="/track/{user}"><button type="submit"
                                        class="mb-4 mt-6 w-48 transform rounded-lg bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                       Track
                                    </button></a>
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

</x-layout>
