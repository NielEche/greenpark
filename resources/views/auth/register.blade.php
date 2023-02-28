@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
<main class="content-row">
    <div class="page-header page-header-07">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Register</h2>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container">
    <div class=" ">
        <ul class="nav registerLi">
            <li>
                <a data-toggle="tab" href="#tab1" class="active">Register</a>
            </li>
            <span class="mx-1">|</span>
            <li>
                <a data-toggle="tab" href="#tab2">login</a>
            </li>
        </ul>
    </div>
    <div class="py-3 tab-content">
        <div class="tab-pane active" id="tab1">
          @include('auth.register-page')
        </div>

        <div class="tab-pane" id="tab2">
            @include('auth.login-page')
        </div>
    </div>
</div>

@endsection

@section('footer')
@include('partials.footer')
@endsection
