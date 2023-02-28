

@extends('layouts.guest')

@section('title')
Login
@endsection

@section('content')

<div class="login-wrapper ">
    <div class="bg-pic">
        <img src="{{ asset('files/media/slide.jpg') }}" alt=""
            class="lazy">


        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white">
                TEDxPortHarcourt</h2>
            <p class="small">
                images Displayed are solely for representation purposes only, All work copyright of © 2009-2020
                TEDXPORTHARCOURT.
            </p>
        </div>
    </div>


    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <img src="{{ asset('files/media/tedxphlogoblack.png') }}" alt="logo"  width="90" height="34">
            <p class="p-t-35">Sign into your TEDXPH account</p>
    
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div class="form-group">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <div class="controls">
                    <x-jet-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                    </div>
                </div>
    
                <div class="form-group mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
    
                    <x-jet-button class="btn btn-primary btn-cons m-t-10 ml-4">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>

        </div>
    </div>

</div>
@endsection

@section('footer')
@include('admin.partials.footer')
@endsection

