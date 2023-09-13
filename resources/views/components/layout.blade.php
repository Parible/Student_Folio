<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>
    <title>studFolio</title>

    <style>
        .hamburger {
            cursor: pointer;
            width: 24px;
            height: 24px;
            transition: all 0.25s;
            position: relative;
        }

        .hamburger-top,
        .hamburger-middle,
        .hamburger-bottom {
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 2px;
            background: #000;
            transform: rotate(0);
            transition: all 0.5s;
        }

        .hamburger-middle {
            transform: translateY(7px);
        }

        .hamburger-bottom {
            transform: translateY(14px);
        }

        .open {
            transform: rotate(90deg);
            transform: translateY(0px);
        }

        .open .hamburger-top {
            transform: rotate(45deg) translateY(6px) translate(6px);
        }

        .open .hamburger-middle {
            display: none;
        }

        .open .hamburger-bottom {
            transform: rotate(-45deg) translateY(6px) translate(-6px);
        }
    </style>
</head>

<body>

    <!-- NAV START -->

    <nav class="relative bg-white shadow-lg dark:bg-gray-800">
        <div class="container mx-auto px-6 py-4">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <a href="/">
                        <span class="h-6 w-auto sm:h-7" alt="">
                            <h1
                                class="ml-16 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 text-2xl font-bold text-white shadow-xl hover:text-gray-300">
                                <b>StudentFolio</b>
                            </h1></a></span>

                    {{-- x-cloak @click="isOpen = !isOpen" t --}}

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">

                        <!-- Hamburger Icon -->
                        <button id="menu-btn" class="hamburger block focus:outline-none md:hidden">
                            <span class="hamburger-top"></span>
                            <span class="hamburger-middle"></span>
                            <span class="hamburger-bottom"></span>
                        </button>

                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->

                <div
                    class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 transition-all duration-300 ease-in-out dark:bg-gray-800 lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100">
                    <div class="-mx-6 flex flex-col lg:mx-8 lg:flex-row lg:items-center">

                        <div class="">
                            <div id="menu">

                                <a href="/transcript"
                                    class="nav-link mx-3 mt-2 transform rounded-md px-3 py-2 text-gray-700 transition-colors duration-300 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 lg:mt-0">Transcripts</a>
                                <a href="/intern-1"
                                    class="nav-link mx-3 mt-2 transform rounded-md px-3 py-2 text-gray-700 transition-colors duration-300 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 lg:mt-0">Internships</a>
                                <a href="/resit-1"
                                    class="nav-link mx-3 mt-2 transform rounded-md px-3 py-2 text-gray-700 transition-colors duration-300 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 lg:mt-0">Re-sits</a>

                                @auth

                                    <a href="/track"><button
                                            class="nav-link mx-3 mt-2 transform rounded-md px-3 py-2 text-gray-700 transition-colors duration-300 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 lg:mt-0">Track</button></a>
                                @endauth

                            </div>
                        </div>
                    </div>

                    {{-- Notification bell --}}
                    {{-- <div class="mt-4 flex items-center lg:mt-0">
                        <button
                            class="mx-4 hidden transform text-gray-600 transition-colors duration-300 hover:text-gray-700 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400 lg:block"
                            aria-label="show notifications">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button> --}}


                    @auth

                    
                    {{-- profile --}}
                    <button type="button" class="flex items-center focus:outline-none"
                            aria-label="toggle profile dropdown">
                            <div class="h-8 w-8 overflow-hidden rounded-full border-2 border-gray-400">
                                <img src="{{asset('./images/avatar-default-svgrepo-com.svg')}}"
                                    class="h-full w-full object-cover" alt="avatar">
                            </div>

                            
                        <span class="font-bold">
                           {{ auth()->user()->name }}
                        </span>

                        <form action="/logout" method="POST">
                            @csrf

                            <button class="in-line" type="submit" class="">
                                <div class="-mr-6 text-sm mx-2 rounded-full bg-gradient-to-tr from-blue-400 to-red-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300 ">
                                    Logout
                                </div>
                            </button>
                        </form>
                    @else
                        <a href="/login"><button
                                class="mx-2 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 pr-2 pl-2 pb-2 pt-1 font-bold text-white shadow-xl hover:text-gray-300">Login</button></a>
                    @endauth

                    </button>

                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- NAV END -->

    <main>

        {{ $slot }}

    </main>

    <x-flash-message />

</body>
<script>
    const btn = document.getElementById('menu-btn')
    const nav = document.getElementById('menu')

    btn.addEventListener('click', () => {
        btn.classList.toggle('open')

    })
</script>

<script>
  // Get all the checkboxes
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Add an event listener to each checkbox
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', updateTotal);
  });

  // Function to update the total value
  function updateTotal() {
    let total = 0;
    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        // Parse the price value from the data-price attribute
        const price = parseFloat(checkbox.getAttribute('data-price'));
        total += price;
      }
    });

    // Display the total value with the Ghanaian Cedi symbol
    const totalElement = document.getElementById('total');
    totalElement.textContent = 'Total: ';
    const currencySymbol = document.createElement('span');
    currencySymbol.innerHTML = '&#8373;';
    totalElement.appendChild(currencySymbol);
    totalElement.innerHTML += total.toFixed(2);

     
  }
</script>

<script>
    const currentPath = window.location.pathname;

    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('bg-gray-100', 'dark:bg-gray-700', 'text-gray-200');
        }
    });
</script>



{{-- add an ADD action to the resit   --}}
<script>
        const addRowBtn = document.getElementById("addRowBtn");
        const courseTable = document.getElementById("courseTable").getElementsByTagName('tbody')[0];

        addRowBtn.addEventListener("click", () => {
            const newRow = document.createElement("tr");
            newRow.className = "border-b hover:bg-gray-100";

            const cell1 = document.createElement("td");
            cell1.className = "py-3 px-4";
            cell1.innerHTML = '<input type="text" class="w-full bg-transparent border-none" value="">';
            newRow.appendChild(cell1);

            const cell2 = document.createElement("td");
            cell2.className = "py-3 px-4";
            cell2.innerHTML = '<input type="text" class="w-full bg-transparent border-none" value="">';
            newRow.appendChild(cell2);

            const cell3 = document.createElement("td");
            cell3.className = "py-3 px-4";
            cell3.innerHTML = '<input type="text" class="w-full bg-transparent border-none" value="">';
            newRow.appendChild(cell3);

            const cell4 = document.createElement("td");
            cell4.className = "py-3 px-4";
            cell4.innerHTML = '<input type="text" class="w-full bg-transparent border-none" value="">';
            newRow.appendChild(cell4);

            courseTable.appendChild(newRow);
        });
    </script>

</html>
