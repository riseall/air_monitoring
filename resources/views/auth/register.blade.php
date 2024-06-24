<x-guest-layout>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <div class="relative flex min-h-screen items-center justify-center bg-center bg-cover"
            style="background-image: url('../assets/img/curved-images/curved14.jpg')">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
            {{-- card --}}
            <div class="container">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                    <div
                        class="relative z-0 flex flex-col break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-6">
                            <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                <h5>Sign Up</h5>
                            </div>
                            <form role="form text-left" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" id="name" name="name" :value="old('name')" required
                                        autofocus autocomplete="name"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="Name" aria-label="Name" aria-describedby="email-addon" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="mb-4">
                                    <input type="email" id="email" name="email" :value="old('email')" required
                                        autocomplete="username"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mb-4">
                                    <input type="password" id="password" name="password" required
                                        autocomplete="new-password"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="Password" aria-label="Password"
                                        aria-describedby="password-addon" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="mb-0.5">
                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                        required autocomplete="new-password"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="Confirm Password" aria-label="Confirm Password"
                                        aria-describedby="password-addon" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-600 hover:border-slate-700 hover:bg-slate-700 hover:text-white">{{ __('Register') }}</button>
                                </div>
                                <div
                                    class="px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                                    <p class="mt-4 mb-0  leading-normal text-sm">Already have an account? <a
                                            href="{{ route('login') }}" class="font-bold text-slate-700">Sign
                                            in</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
