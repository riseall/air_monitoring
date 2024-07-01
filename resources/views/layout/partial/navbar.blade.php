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
                           <!-- Settings Dropdown -->
                           <div class="sm:flex sm:items-center sm:ms-6">
                               <x-dropdown align="right" width="48">
                                   <x-slot name="trigger">
                                       <button
                                           class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-700 bg-transparent hover:text-slate-600 focus:outline-none transition ease-in-out duration-150">
                                           <i class="fa fa-user mr-2"></i>
                                           {{-- <div>{{ Auth::user()->name }}</div> --}}

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
                                       {{-- <x-dropdown-link :href="route('profile.edit')">
                                           {{ __('Profile') }}
                                       </x-dropdown-link> --}}

                                       <!-- Authentication -->
                                       {{-- <form method="POST" action="{{ route('logout') }}">
                                           @csrf

                                           <x-dropdown-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                               {{ __('Log Out') }}
                                           </x-dropdown-link>
                                       </form> --}}
                                   </x-slot>
                               </x-dropdown>
                           </div>
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
       <!-- end Navbar -->
