@extends('layouts.app')

@section('title')
Experiences
@endsection

@section('content')
<main class="content-row">
    <div class="page-header page-header-04">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Experiences</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="indents-13"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3">
                <h2 class="content-title-01 content-title--06">Relevant Previous Experience In Similar Transactions</h2>
            </div>

            <div class="col-lg-1">
                <div class="content-divider"></div>
            </div>
            <div class="col-lg-4">
                <p class="fw-35">
                    <span class="dropcap">T</span>he firm has routinely advised its clients on various aspects of urban
                    development laws and also on compliance with those laws including enforcement and litigation. </p>
            </div>
            <div class="col-lg-4">
                <p class="fw-35">We have also been involved in the settlement of several community related issues
                    arising from the purchase and development of landed properties by our clients.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="indents-80"></div>
            </div>
        </div>
    </div>

    <div class="full-block-04">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pad-5 bg-white">
                    <div class="full-block-04__content mt-3 ">
                        <h2 class="full-block-04__title" style="font-size: 22px;">In the recent past, the firm has been
                            involved in providing litigation and advisory services to</h2>
                        <div class="module_skills module_skills-process">
                            <div class="module_inner">
                                <div class="shortcode_skills">
                                    <div class="col-lg-12 ">
                                        <div class="row">
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('files/img/exp/totallogo.png') }}" alt="">
                                            </div>
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('files/img/exp/wema.png') }}" alt="">
                                            </div>
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('files/img/exp/polaris.png') }}" alt="">
                                            </div>
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('files/img/exp/fidelity.png') }}" alt="">
                                            </div>
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('files/img/exp/hb.png') }}" alt="">
                                            </div>
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('files/img/exp/sundry.png') }}" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <ul class="m-0">

                                        <li class=" fw-35">- Colony Properties, Inter Alia</li>
                                    </ul>
                                    <p class="fw-35">We have obtained the consent of the companies mentioned herein to
                                        provide this information and would be willing to provide any references or
                                        specific information which you may require.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img class="full-block-04__img w-100 h-100 " src="{{ asset('files/img/slider/slide2.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
