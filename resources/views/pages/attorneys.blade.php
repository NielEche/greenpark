@extends('layouts.app')

@section('title')
Attorneys
@endsection

@section('custom-style')
<link href="{{ asset('files/css/custom.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Content -->
<main class="content-row">
    <div class="page-header page-header-08">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Attorneys</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="content-title-02">Only Qualified Attorneys</h2>
                <div class="content-subtitle-02">
                    <p>Our commitment and dedication to continually move forward enables us to improve our
                        <br> representation and provide you with a service you can’t find anywhere else. </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="indents-15"></div>
            </div>
        </div>
    </div>


    <div style="padding-bottom: 220px !important;" class="color-block-01 color-block-01--02 ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="indents-20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <h2 class="content-title-01">Meet Our Attorneys</h2>
                </div>
                <div class="col-xl-9">
                    <div class="content-text-01">
                        <p>We bring each client a combination of deep industry knowledge and expert perspectives from
                            other industries on the challenge at stake, to offer our clients fresh perspectives and
                            breakthrough business insights.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="indents-70 indents-xl-25"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="team-block team-block--02">
                        <div class="team-block__item">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team1.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title">
                                    <a href="" data-toggle="modal" data-target="#attorneybio">BILL UZOMA UKACHUKWU</a>
                                </h3>
                                <p class="team-block__item-subtitle">Senior Partner</p>
                            </div>
                        </div>
                        <div class="team-block__item">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team2.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title">LILLY-TARIAH SOJIYE T</h3>
                                <p class="team-block__item-subtitle">Senior Partner</p>
                            </div>
                        </div>
                        <div class="team-block__item">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team3.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title">OCHE SAMUEL ONAZI</h3>
                                <p class="team-block__item-subtitle">Senior Associate</p>
                            </div>
                        </div>
                        <div class="team-block__item">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team4.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title">NWEZE NKECHI</h3>
                                <p class="team-block__item-subtitle">Associate</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('partials.modals.attorneyBio')

</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
