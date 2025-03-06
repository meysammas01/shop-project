<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{route('home.products.all')}}" class="home-button">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                صفحه اول فروشگاه
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('رمز عبور خود را فراموش کرده‌اید؟ مشکلی نیست. فقط ایمیل خود را به ما اطلاع دهید تا یک لینک بازنشانی رمز عبور برای شما ارسال کنیم که به شما امکان می‌دهد رمز جدیدی انتخاب کنید.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('ایمیل')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('لینک تغییر رمز عبور') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
