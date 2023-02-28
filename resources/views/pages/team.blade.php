@extends('layouts.app')

@section('title')
Directors
@endsection

@section('content')
@php( $attorneys = \App\Models\Attorneys::all() )
<!-- Content -->

<div class="page-wrapper bg-light" data-barba="container">
    <main class="page-wrapper__content">
        <!-- section INTRO -->
        <section class="section section-intro section-masthead section_pt-large bg-accent-secondary-4 color-white"
            data-os-animation="data-os-animation">
            <div class="section-masthead__inner section-intro__inner  container">
                <header class="row section-intro__header section-masthead__header">
                    <div class="col-lg-12 text-center py-5">
                        <h1 class="p_50 section-masthead__heading section-intro__heading split-text js-split-text text-xl"
                            data-split-text-type="lines, words, chars" data-split-text-set="chars">Directors</h1>
                        <div class="section-masthead__wrapper-button d-lg-block d-none"><a class="link-arrow"
                                href="projects-grid-2.html">
                                <!--<div class="link-arrow__label container">Employees</div>
                                        <div class="link-arrow__icon material-icons">keyboard_arrow_right</div>-->
                            </a></div>
                    </div>
                </header>
            </div>
            <div class="section-masthead__background section-masthead__background_fullscreen"
                data-art-parallax="background" data-art-parallax-factor="0.1">
                <div class="art-parallax__bg lazy-bg"
                    data-src="https://res.cloudinary.com/nieleche/image/upload/v1631538454/martin-adams-a_PDPUPuNZ8-unsplash_sjccni.jpg">
                </div>
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
        <!-- section CONTENT #1 -->
        <section class="section section-content bg-white py-5" data-os-animation="data-os-animation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 section-content__header ">
                        <div class="split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                            <h4>OUR DIRECTORS</h4>
                        </div>
                        <div class="section__headline section-content__headline"></div>
                    </div>

                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </section>
        <!-- - section CONTENT #1 -->

        <!-- section TEAM -->
        <section class="section section-team py-5">
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
                                            <li class="social__item"><a class="fa fa-facebook-f" href="{{ $data->facebook }}"></a></li>
                                            <li class="social__item"><a class="fa fa-twitter" href="{{ $data->twitter }}"></a></li>
                                            <li class="social__item"><a class="fa fa-instagram" href="{{ $data->instagram }}"></a></li>
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
    </main>

    @foreach($attorneys as $key => $data)
    @include('partials.modals.teamBio')
    @endforeach
    @endsection

    @section('footer')
    @include('partials.footer')
    @endsection
