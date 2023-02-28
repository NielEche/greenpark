<x-jet-authentication-card>
    <x-slot name="logo">
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="content-title-02">Register</h2>
            </div>
        </div>
    </div>

    <x-jet-validation-errors class="mb-4" />


    <form class="form-sec" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name" />
        </div>

        <div class="form-group">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="form-group">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="form-control" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <div class="form-group">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                required autocomplete="new-password" />
        </div>

        <div class="form-group text-right">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-jet-button class="btn btn-gold rounded text-right ml-4">
                {{ __('Register') }}
            </x-jet-button>
        </div>
    </form>
</x-jet-authentication-card>
