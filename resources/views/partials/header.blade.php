<nav class="bg-white sticky z-10 w-full top-0 left-0 border-b border-gray-200 ">
    <div class="max-w-screen-2xl flex flex-wrap  items-center justify-between mx-auto p-4 ">
        <a href="#" class="flex items-center">
            <img src="{{URL::asset('img/logo.png')}}" class="h-9 mr-3" alt="Logo" />
            <span class="self-center text-2xl  font-bold whitespace-nowrap ">Car Monitoring</span>
        </a>
        <div class="flex items-baseline gap-5 md:order-2">
            <h2 class="text-lg">Hi, {{Auth::user()->name}}</h2>
            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="/logout">
                    <button type="submit"
                        class="text-sm text-red-500 border-2 border-red-500 hover:bg-red-800 focus:ring-4  font-medium rounded-lg  px-4 py-2  mr-3 md:mr-0">
                        Log Out
                    </button></a>

            </form>

            @else
            <a href="/login"><button type="button"
                    class="text-green-500 border-2 border-green-500 hover:bg-green-800 focus:ring-4  font-medium rounded-lg  px-4 py-2  mr-3 md:mr-0">
                    Login
                </button></a>
            @endauth
            


            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white  bg-gray-900 ">
                <li>
                    <a href="/dashboard"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500  md:dark:hover:bg-transparent "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/cars"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500  md:dark:hover:bg-transparent">
                        Car</a>
                </li>
                <li>
                    <a href="/drivers"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500  md:dark:hover:bg-transparent ">
                        Driver</a>
                </li>
                <li>
                    <a href="/approvers"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500  md:dark:hover:bg-transparent ">
                        Approver</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
