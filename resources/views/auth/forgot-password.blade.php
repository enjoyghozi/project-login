<x-authentication-layout>
    <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">{{ __('Reset your Password') }}</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <x-input-label for="email">{{ __('Email Address') }} <span class="text-red-500">*</span></x-input-label>
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
        </div>
        <div class="flex justify-between mt-6">
            <span>{{ __('Back to') }} <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="{{ route('login') }}">{{ __('Sign in') }}</a></span>
            <x-button>
                {{ __('Send Reset Link') }}
            </x-button>
        </div>
    </form>
    <x-validation-errors class="mt-4" />
</x-authentication-layout>
