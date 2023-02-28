@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
@php( $attorneys = \App\Models\Attorneys::orderBy('id', 'asc')->limit(3)->get() )
<!-- Content -->

<div class="page-wrapper bg-light" data-barba="container">
    <main class="page-wrapper__content">
        <!-- section INTRO -->
        <section class="section section-intro section-masthead section-fullheight bg-accent-secondary-4 color-white"
            data-os-animation="data-os-animation">
            <div class="section-masthead__inner section-intro__inner section-fullheight__inner container">
                <header class="row section-intro__header section-masthead__header">
                    <div class="col-lg-12 text-center">
                        <h1 class="p_70 section-masthead__heading section-intro__heading split-text js-split-text text-xl"
                            data-split-text-type="lines, words, chars" data-split-text-set="chars">GREENPARK</h1>
                        <p class="p_lineheight ">Exploration and Production <br>Company Nigeria Ltd</p>
                        <div class="section-masthead__wrapper-button d-lg-block "><a class="link-arrow"
                                href="{{route('about')}}">
                                <div class="link-arrow__label text-white">Explore</div>
                                <div class="link-arrow__icon material-icons text-white">keyboard_arrow_right</div>
                            </a></div>
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
                    data-src="https://res.cloudinary.com/nieleche/image/upload/v1631537903/kevin-harris-0u5iUOkqv4Y-unsplash_ni2lbq.jpg">
                </div>
                <div class="overlay overlay_dark section-masthead__overlay"></div>
            </div>
            <div class="section-masthead__wrapper-scroll-down">
                <div class="scroll-down js-scroll-down">
                    <div class="scroll-down__circle-1"></div>
                    <div class="scroll-down__line"></div>
                    <div class="scroll-down__circle-2"></div>
                </div>
            </div>
        </section>
        <!-- - section INTRO -->
        <!-- section ABOUT #1 -->
        <section class="section section-content section_pt-small section_pb-xsmall bg-bluetext"
            data-os-animation="data-os-animation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 section-content__header">
                        <div class="section-content__subheading subheading split-text js-split-text text-white"
                            data-split-text-type="lines" data-split-text-set="lines"><span>About Us</span></div>
                        <div class="split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                            <h3 style="font-weight: 500;
                line-height: 1.2; font-size: 1.75rem;" class="text-white pt-2">GREENPARK Exploration & Production
                                Company "Nigeria" Limited, is a corporate entity
                                setup for the purposes to invest, Finance , Manage, and operate Oil and Gas Exploration
                                and production Assets and other venture opportunities out of Nigeria.</h3>
                            <div class="section-masthead__wrapper-button d-lg-block "><a class="link-arrow"
                                    href="{{route('about')}}">
                                    <div class="link-arrow__label">Learn More</div>
                                    <!--<div class="link-arrow__icon material-icons">keyboard_arrow_right</div>-->
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- - section ABOUT #1 -->


        <!-- section PORTFOLIO -->
        <section
            class="section section-content section-cta section-image section_pt-large section_pb-large section_z-100 bg-dark-2 color-white text-center">
            <div class="section__content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <header class="section-cta__header ">
                                <p class="p_14 m-0">Strong Corporate Governance </p>
                                <h2 class="section-cta__heading p_50">Explore our Agenda</h2>
                                <p class="p_lineheight">Grow production and reserve base by utilising recently acquired
                                    3D seismic data, drilling deeper horizons, and also through infill drilling and
                                    production enhancement.</p>
                                <div class="section-masthead__wrapper-button d-lg-block "><a class="link-arrow"
                                        href="vesselcharter.php">
                                        <div class="link-arrow__label text-white">Explore</div>
                                        <div class="link-arrow__icon material-icons text-white">keyboard_arrow_right
                                        </div>
                                    </a></div>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-image__wrapper section-image__wrapper_absolute" data-art-parallax="background"
                data-art-parallax-factor="0.1">
                <div class="art-parallax__bg lazy-bg"
                    data-src="https://res.cloudinary.com/nieleche/image/upload/v1631538454/martin-adams-a_PDPUPuNZ8-unsplash_sjccni.jpg">
                </div>
                <div class="section-image__overlay overlay overlay_dark"></div>
            </div>
        </section>
        <!-- - section PORTFOLIO -->

        <!-- section LINKS -->
        <section class="section section-blog bg-white section_pt-small section_pb pb-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-12 py-2">
                        <!-- - posts -->
                        <section class="section section-content" data-os-animation="data-os-animation">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 section-content__header section-content__header_mb">
                                        <div class="split-text js-split-text" data-split-text-type="lines"
                                            data-split-text-set="lines">
                                            <h5>Meet our Directors </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-lg-2 section-content__content">
                                        <div class="section__headline section-content__headline"></div>
                                    </div>
                                    <div class="col-lg-10 section-content__content">
                                        <div class="col-lg-12 section-content__content">
                                            <div class="split-text js-split-text" data-split-text-type="lines"
                                                data-split-text-set="lines">
                                                <p class="p_lineheight p_14 m-0">Our team of dedicated team players ,
                                                    working tirelessly to provide the best services for you.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div
                                            class="section-masthead__wrapper-button d-lg-block  text-left m-0 py-5  bluetext">
                                            <a class="link-arrow" href="media.php">

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- section LINKS -->

        <!-- section TEAM -->
        <section style="background-color: #fff !important;" class="section section-team pt-0 pb-5">
            <div class="container">
                <div class="grid grid_fluid-3 js-grid">
                    <div
                        class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__sizer js-grid__sizer">
                    </div>

                    @foreach($attorneys as $key => $data)
                    <div
                        class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 js-grid__item">
                        <a data-toggle="modal" data-target="#teambio{{ $data->id }}">
                            <div class="figure-member figure-member_has-social">
                                <div class="figure-member__wrapper-img">
                                    <div class="figure-member__wrapper-img-inner">
                                        <div class="figureteam  lazy grayscale"><img
                                                data-src="{{ asset('uploads/attorneys') }}/{{ $data->file_path }}"
                                                src="#" width="300" height="450" alt="" /></div>
                                        <div class="figure-member__curtain bg-accent-secondary-4"></div>
                                    </div>
                                    <div class="figure-member__social">
                                        <ul class="social">
                                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="figure-member__line"></div>
                                </div>
                                <div class="figure-member__content">
                                    <h4 class="figure-member__heading">{{ $data->name }}</h4>
                                    <div class="figure-member__position">{{ $data->position }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- - section TEAM -->

        <!-- section LINKS -->
        <section class="section section-blog bg-white  section_pb pb-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-12 py-2">
                        <!-- - posts -->
                        <section class="section section-content" data-os-animation="data-os-animation">
                            <div class="container">
                                <div class="row justify-content-between">

                                    <div class="col-lg-12">
                                        <div
                                            class="section-masthead__wrapper-button d-lg-block  text-left m-0 py-5  bluetext">
                                            <a class="link-arrow" href="{{route('team')}}">
                                                <div class="link-arrow__label bluetext">See All</div>
                                                <div class="link-arrow__icon material-icons bluetext">
                                                    keyboard_arrow_right</div>
                                            </a></div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- section LINKS -->
    </main>
        @foreach($attorneys as $key => $data)
            @include('partials.modals.teamBio')
        @endforeach                
    @endsection

    @section('footer')
    @include('partials.footer')
    @endsection
