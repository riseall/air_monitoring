@extends('users.main')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="px-16">
            <div class="w-full p-6 mx-auto">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 xl:w-1/2">
                        <div
                            class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-xl bg-clip-border">
                            <div class="p-5 sm:p-8 h-full bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                <div class="max-w-xl">
                                    @include('profile.partials.updateProfileUser')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 xl:w-1/2">
                        <div
                            class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-xl bg-clip-border">
                            <div class="p-5 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                <div class="max-w-xl">
                                    @include('profile.partials.updatePasswordUser')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 py-6">
                        <div
                            class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-xl bg-clip-border">
                            <div class="p-5 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                <div class="max-w-full">
                                    @include('profile.partials.deleteUser')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
