<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            ホームに戻る
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="block mt-4">
                <x-label for="password_confirmation" :value="__('パスワード再確認')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('登録済み方はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('新規作成') }}
                </x-button>
                    <a href="/login/google" class="btn btn-secondary btn-sm" role="button">
                        Google Login
                    </a>
                    <a href="/login/facebook" class="btn btn-primary btn-sm" role="button">
                        facebook Login
                    </a>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
