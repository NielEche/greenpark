@extends('layouts.app')

@section('title')
Practice Areas
@endsection

@section('content')
@php( $practices = \App\Models\Practice::all() )
<main class="content-row">
    <div class="page-header page-header-05">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">{{$practice['title']}}</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="content-title--04">Practice Areas</h3>
                
                <ul class="sidebar-menu-list ">
                    @foreach($practices as $key => $data)
                    <li class="{{ (\Request::route()->getName() == 'companyInvestmentLaws') ? ' active' : '' }}">
                        <a href={{$data['id']}}>{{$data['title']}}</a>
                    </li>
                     @endforeach
                </ul>
               
            </div>
            <div class="col-md-9">
                <div class="single-content">
                    <p>{!! $practice['about'] !!}</p>
                    <div class="indents-25"></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
