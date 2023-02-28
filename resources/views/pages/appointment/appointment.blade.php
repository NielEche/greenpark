@extends('layouts.app')

@section('title')
Appointment
@endsection

@section('content')

<main class="content-row">
    <div class="page-header page-header-07">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Appoinment</h2>
                </div>
            </div>
        </div>
    </div>
   
        @include('pages.partials.join')

    
    <div class="indents-90"></div>
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection

