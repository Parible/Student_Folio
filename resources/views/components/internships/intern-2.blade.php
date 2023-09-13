<x-layout>

    <div class="container mx-auto flex flex-col p-8 md:flex-row">
        <div class="flex max-w-md flex-col items-center p-16 p-8 pt-2">

            <div class="items-left mt-10 p-6 text-xs">

                <div class="mt-10">

                    <img src="{{ asset('./images/print-svgrepo-com.svg') }}" alt="">

                </div>

            </div>

        </div>

        <div
            class="mx-auto mb-10 -mt-24 flex max-w-lg flex-col rounded-md border border-slate-800 p-2 shadow-lg md:-mt-2 md:w-1/2">

            <div class="mx-auto p-8">

                <div class="items-left mt-10 p-6 text-xs">

                     <form action="{{ route('generate-letter-pdf') }}" method="POST">
                        @csrf
                        <input type="text" name="firstname" />
<input type="text" name="lastname" />
                @foreach ($internships as $internship)
                      
               
                    <p>
                        We write to introduce <b>  {{ $internship->firstname }} {{ $internship->lastname }}</b>, a level <b> {{ $internship->level }}</b> student pursuing a
                         <b> {{ $internship->programme }}</b> in the Department of  <b> {{ $internship->department }}</b> at Ghana Communication
                        Technology University (GCTU). <br><br>

                        As part of the requirements for the award of the <b>{{ $internship->type }}</b>, students are encouraged to undertake an
                        attachment during vacations with well-established organizations either in or outside the country

                        for a period of two to three months.
                        <br>
                        <br>

                        This department attachment program is to enable students to gain professional work experience,

                        develop and refine new skills, and serve as a bridge between academia and industry in developing

                        programs to meet the needs and demands of the industry. <br><br> It would be much appreciated if
                        <b> {{ $internship->title }}</b><b> {{ $internship->lastname }}</b> is offered the opportunity to do his attachment with

                        your organization. You may contact <b> {{ $internship->lastname }}</b> on <b> +233 {{ $internship->contact }}</b>. For further
                        information, kindly contact the Department of Information Technology

                        bboadu@getu.edu.gh

                        Sincerely,
                        <br><br>

                        Dr. William Brown- Acquaye

                        HOD,

                        Department of Information Technology.
                    </p>


                    
                  @break
                    @endforeach
                   

                </div>
                <a type="submit"><button
                        class="mt-16 transform rounded-lg bg-blue-600 px-6 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Generate Letter
                    </button></a>
                    </form>
            </div>
        </div>
    </div>

    </div>
    </div>

</x-layout>

