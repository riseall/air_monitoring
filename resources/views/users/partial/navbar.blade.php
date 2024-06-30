    <nav class="border-2 sticky top-[1%] z-110 backdrop-saturate-[200%] backdrop-blur-[30px] shadow-blur flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <a class="flex items-center m-0 text-sm whitespace-nowrap gap-2 text-slate-700" href="/">
                    <img src="./assets/img/air-quality.png"
                        class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                        alt="main_logo" />
                    <div class="flex flex-col">
                        <span class="font-bold text-base -mb-2 ">Air Quality</span>
                        <span class="text-center text-xs font-mono font-extralight">Monitoring</span>
                    </div>
                </a>
            </nav>

            <div class="flex flex-row gap-8 text-slate-700 text-sm">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
            </div>

            <div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    <li class="flex items-center">
                        <a href="./pages/sign-in.html"
                            class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                            <i class="fa fa-user sm:mr-1"></i>
                            <span class="hidden sm:inline">Sign In</span>
                        </a>
                    </li>
                    <li class="flex items-center pl-4 xl:hidden">
                        <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500"
                            sidenav-trigger>
                            <div class="w-4.5 overflow-hidden">
                                <i
                                    class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                <i
                                    class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
