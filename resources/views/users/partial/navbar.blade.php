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

            <div class="flex flex-row gap-8 text-slate-800 text-sm">
                <a class="hover:font-semibold hover:text-slate-500" href="/">Home</a>
                <a class="hover:font-semibold hover:text-slate-500" href="/about">About</a>
                <a class="hover:font-semibold hover:text-slate-500" href="/contact">Contact</a>
            </div>

            <div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-700 bg-transparent hover:text-slate-600 focus:outline-none transition ease-in-out duration-150">
                                            <i class="fa fa-user mr-2"></i>
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.user.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent text-sm transition hover:text-black/70 hover:text-slate-500 focus:outline-none focus-visible:ring-[#FF2D20] ">
                                    <span class="hidden sm:inline">Login</span>
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent text-sm transition hover:text-black/70 hover:text-slate-500 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                    {{-- <li class="flex items-center pl-4 xl:hidden">
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
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
