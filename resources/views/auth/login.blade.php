@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<main class="content-row bg-white">
        <!-- section INTRO -->
        <section class="section section-intro section-masthead section_pt-large bg-accent-secondary-4 color-white"
            data-os-animation="data-os-animation">
            <div class="section-masthead__inner section-intro__inner container">
                <header class="row section-intro__header section-masthead__header">
                    <div class="col-lg-12 text-center">
                        <div class="container py-5">
                            <h1 class="p_50 section-masthead__heading section-intro__heading split-text js-split-text text-xl"
                                data-split-text-type="lines, words, chars" data-split-text-set="chars"> Login</h1>
                        </div>

                        <div class="section-masthead__wrapper-button d-lg-block d-none"><a class="link-arrow"
                                href="projects-grid-2.html">
                                <!-- <div class="link-arrow__label">View Portfolio</div>
           <div class="link-arrow__icon material-icons">keyboard_arrow_right</div>--></a></div>
                    </div>
                </header>
            </div>
            <div class="section-masthead__background section-masthead__background_fullscreen"
                data-art-parallax="background" data-art-parallax-factor="0.1">
                <div class="art-parallax__bg lazy-bg"
                    data-src="https://res.cloudinary.com/nieleche/image/upload/v1631551486/land_qxuzda.jpg"></div>
                <div class="overlay overlay_dark section-masthead__overlay"></div>
            </div>
            <!--<div class="section-masthead__wrapper-scroll-down">
                    <div class="scroll-down js-scroll-down">
                        <div class="scroll-down__circle-1"></div>
                        <div class="scroll-down__line"></div>
                        <div class="scroll-down__circle-2"></div>
                    </div>
                </div>-->
        </section>
        <!-- - section INTRO -->
    <div class="container">
        <div class="py-3 tab-content">
    
            <div style="background-color: #f8f8f8 !important; " class="tab-pane active" id="tab2">
                @include('auth.login-page')
            </div>
        </div>
    </div>
</main>

@endsection

@section('footer')
@include('partials.footer')
@endsection

