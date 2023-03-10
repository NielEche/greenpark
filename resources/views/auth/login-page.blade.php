<x-jet-authentication-card>
    <x-slot name="logo">
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-sec" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="form-group">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="form-check block mt-4">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="form-group text-right">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-dark hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-jet-button class="btn btn-success rounded ml-4">
                {{ __('Login') }}
            </x-jet-button>
        </div>
    </form>
</x-jet-authentication-card>