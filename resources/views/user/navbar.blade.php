<nav
        class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white shadow">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-blueGray-700 text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                    href="/dashboard">Yoozh</a>
                    <a class="text-gray-500 text-xs font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                    href="/cart">Cart</a>
                    <a class="text-gray-500 text-xs font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                    href="/transaction">Transaction</a>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                    <li class="inline-block relative">
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48 navbar-popper"
                            id="demo-pages-dropdown">
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                Admin Layout
                            </span>
                            <a href="./pages/admin/dashboard.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Dashboard
                            </a>
                            <a href="./pages/admin/settings.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Settings
                            </a>
                            <a href="./pages/admin/tables.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Tables
                            </a>
                            <a href="./pages/admin/maps.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Maps
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                Auth Layout
                            </span>
                            <a href="./pages/auth/login.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Login
                            </a>
                            <a href="./pages/auth/register.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Register
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                No Layout
                            </span>
                            <a href="./pages/landing.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Landing
                            </a>
                            <a href="./pages/profile.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Profile
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="../../assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="user-dropdown">
                            <a href="/profile/{{ Auth::user()->user_id }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Profile</a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <form action="/logout" method="POST">
                                @csrf
                                <input
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-white text-blueGray-700"
                                    type="submit" value="Logout">
                            </form>
                        </div>
                    </ul>
            </div>
        </div>
    </nav>