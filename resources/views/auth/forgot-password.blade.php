<x-guest-layout>
{{--    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-panel.auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-panel.input-label for="email" :value="__('Email')" />--}}
{{--            <x-panel.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-panel.input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-panel.primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-panel.primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}

    <section class="min-h-75-screen ">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-3">
                <div class="w-full max-w-full px-3 mx-auto shrink-0 md:flex-0 md:w-7/12 lg:w-5/12">
                    <div class="relative z-0 flex flex-col min-w-0 mt-40 mb-6 break-words bg-white border-0 sm:mt-64 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 text-center pt-6 pb-1">
                            <h4 class="mb-1 font-bold">{{__('Reset password')}}</h4>
                            <p class="mb-0">{{__('You will receive an e-mail in maximum 60 seconds')}}</p>
                        </div>

                        <div class="flex-auto p-6 text-center">
                            <form role="form" action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <x-panel.input-label for="email" :value="__('Email')" />
                                    <x-panel.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-panel.input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="inline-block px-16 py-3.5 mb-0 mt-4 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 bg-gradient-to-tl from-gray-900 to-slate-800 leading-pro text-sm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">
                                        {{__('Send')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-guest-layout>
