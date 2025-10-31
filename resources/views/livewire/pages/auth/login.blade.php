    <div class=" max-w-md mx-auto mt-10 p-6  ">
        <div
            class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">{{ __('Sign in') }}</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                        {{ __("Don't have an account yet?") }}
                        <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                            href="{{ route('register') }}">
                            {{ __('Sign up here') }}
                        </a>
                    </p>
                </div>

                <div
                    class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                    {{ __('Or') }}</div>

                <!-- Form -->
                <form wire:submit.prevent="login">
                    <div class="grid gap-y-4">

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm mb-2 dark:text-white">
                                {{ __('Email address') }}
                            </label>
                            <div class="relative">
                                <input type="email" id="email" wire:model="form.email"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm
                               focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50
                               dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                               dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required autocomplete="email">
                            </div>

                            @error('form.email')
                                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <div class="flex flex-wrap justify-between items-center gap-2">
                                <label for="password" class="block text-sm mb-2 dark:text-white">
                                    {{ __('Password') }}
                                </label>
                                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline
                              focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    {{ __('Forgot password?') }}
                                </a>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" wire:model="form.password"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm
                               focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50
                               dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                               dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required autocomplete="current-password">
                            </div>

                            @error('form.password')
                                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember me -->
                        <div class="flex items-center">
                            <div class="flex">
                                <input id="remember" type="checkbox" wire:model="form.remember"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500
                               dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500
                               dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                            </div>
                            <div class="ms-3">
                                <label for="remember" class="text-sm dark:text-white">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                        </div>

                        <!-- Botão -->
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium
                       rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700
                       focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            {{ __('Sign in') }}
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    </div>
