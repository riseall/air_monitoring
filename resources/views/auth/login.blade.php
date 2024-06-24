<x-guest-layout>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="relative flex items-center justify-center p-0 overflow-hidden bg-center bg-cover min-h-screen"
                style="background-image: url('../assets/img/curved-images/curved6.jpg')">
                <span
                    class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
                <div class="container z-10">
                    <div class="w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                        <div
                            class="relative bg-white flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                <h3
                                    class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">
                                    Welcome back</h3>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="flex-auto p-6">
                                <form role="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700" for="email"
                                        :value="__('Email')">Email</label>
                                    <div class="mb-4">
                                        <input id="email" type="email" name="email" :value="old('email')"
                                            required autofocus autocomplete="email"
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <label for="password" :value="__('Password')"
                                        class="mb-2 ml-1 font-bold text-xs text-slate-700">Password</label>
                                    <div class="mb-4">
                                        <input id="password" type="password" name="password" required
                                            autocomplete="current-password"
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon" />
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <div class="min-h-6 mb-0.5 block pl-12">
                                        <input id="remember_me" name="remember"
                                            class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                            type="checkbox" />
                                        <label
                                            class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                                            for="remember_me">{{ __('Remember me') }}</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button"
                                            class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">{{ __('Log in') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div
                                class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                                <p class="mx-auto leading-normal text-sm">
                                    Don't have an account?
                                    <a href="register"
                                        class="relative z-10 font-semibold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">Sign
                                        up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
