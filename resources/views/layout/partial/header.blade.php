    <!-- sidenav  -->
    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0  p-0 antialiased transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:shadow-lg backdrop-saturate-[200%] backdrop-blur-[30px] bg-[hsla(00%100%0.8)]">
        <div class="h-19.5 border">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
                <img src="./assets/img/air-quality.png"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
                <span class="ml-1 font-bold text-nowrap transition-all duration-200 ease-nav-brand">Air Quality
                    Monitoring</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="sidebar items-center block w-auto max-h-screen h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="group py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors px-4 hover:px-4 hover:transition hover:shadow-lg hover:rounded-lg hover:bg-white hover:font-semibold hover:text-slate-700 hover:ease-in-out hover:duration-100"
                        href="/" data-page="Dashboard">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500 group-hover:transition-all group-hover:ease-in-out group-hover:duration-100">
                            <i class="fa fa-home text-xs text-slate-800 group-hover:text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="group py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors px-4 hover:px-4 hover:transition hover:shadow-lg hover:rounded-lg hover:bg-white hover:font-semibold hover:text-slate-700 hover:ease-in-out hover:duration-100"
                        href="/tabel" data-page="Tabel">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500 group-hover:transition-all group-hover:ease-in-out group-hover:duration-100">
                            <i class="fa fa-table text-xs text-slate-800 group-hover:text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Tabel</span>
                    </a>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="group py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors px-4 hover:px-4 hover:transition hover:shadow-lg hover:rounded-lg hover:bg-white hover:font-semibold hover:text-slate-700 hover:ease-in-out hover:duration-100"
                        href="./pages/profile.html" data-page="Profile">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500 group-hover:transition-all group-hover:ease-in-out group-hover:duration-100">
                            <i class="text-xs text-slate-800 group-hover:text-white fa fa-user" aria-hidden="true"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="group py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors px-4 hover:px-4 hover:transition hover:shadow-lg hover:rounded-lg hover:bg-white hover:font-semibold hover:text-slate-700 hover:ease-in-out hover:duration-100"
                        href="{{ route('login') }}">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500 group-hover:transition-all group-hover:ease-in-out group-hover:duration-100">
                            <i class="text-xs text-slate-800 group-hover:text-white fa fa-file-text-o"
                                aria-hidden="true"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Sign In</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="group py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors px-4 hover:px-4 hover:transition hover:shadow-lg hover:rounded-lg hover:bg-white hover:font-semibold hover:text-slate-700 hover:ease-in-out hover:duration-100"
                        href="{{ route('register') }}">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500 group-hover:transition-all group-hover:ease-in-out group-hover:duration-100">
                            <i class="text-xs text-slate-800 group-hover:text-white fa fa-rocket"
                                aria-hidden="true"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="sticky top-[1%] z-110 backdrop-saturate-[200%] backdrop-blur-[30px] bg-[hsla(00%100%0.8)] shadow-blur flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start "
            navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol id="breadcrumb" class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="opacity-50 text-slate-700" href="#">Pages</a>
                        </li>
                        <li id="current-page"
                            class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                            aria-current="page">Dashboard</li>
                    </ol>
                    <h6 id="title-page" class="mb-0 font-bold capitalize" aria-current="page">Dashboard</h6>
                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <ul class="flex flex-row w-full justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <a href="./pages/sign-in.html"
                                class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                                <i class="fa fa-user sm:mr-1"></i>
                                <span class="hidden sm:inline">Sign In</span>
                            </a>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;"
                                class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i
                                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                    <i
                                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                    <i
                                        class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- end Navbar -->
