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

<x-layout>

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
                        <form action="/user/edit_page_3/{user}" method="POST">
                            @csrf
                            @method('PUT')
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
                                                    <input type="checkbox" name="request_type[]" value="loa"
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
                                                    <input type="checkbox" name="request_type[]" value="tr"
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
                                                    <input type="checkbox" name="request_type[]" value="trac"
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
                                                    <input type="checkbox" name="request_type[]" value="te"
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
                                                    <input type="checkbox" name="request_type[]" value="teac"
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
                                                    <input type="checkbox" name="request_type[]" value="vl"
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
                                                    <input type="checkbox" name="request_type[]" value="auth_of_cert"
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
                                                    <input type="checkbox" name="request_type[]" value="loi"
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
                                                    <input type="checkbox" name="request_type[]" value="loi_so"
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
                                                    <input type="checkbox" name="request_type[]" value="epl"
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
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="mb-2 flex items-center">
                                                <label class="check">
                                                    <input type="checkbox" name="request_type[]" value="ro_id"
                                                        id="ro_id">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Replacement of ID Cards
                                        </th>
                                        <td class="px-6 py-4">
                                            &#8373;10
                                        </td>

                                    </tr>
                                 
                                </tbody>
                            </table>

                    </div>
                </div>

                <div class="ml-6">
                <a href="/user/edit_page_2/{user}"><button type="button"
                        class="mb-4 mt-6 transform rounded-lg  bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Back
                    </button></a>

                <a href="/user/edit_payment/{user}"><button
                        class="ml-4 mb-4 mt-6 transform rounded-lg  bg-indigo-500 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Proceed to Payment
                    </button></a>
                    </div>  

            </div>
        </div>
    </div>
    </form>
    <!-- CARD ENDS -->
    </div>
    </div>

</x-layout>
