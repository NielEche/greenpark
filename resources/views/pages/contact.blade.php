@extends('layouts.app')

@section('title')
Contact Us
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid page-wrapper nopadding" data-barba="container">
    <main class="page-wrapper__content">
        <div class="container_xs-no-padding">
            <!-- section INTRO -->
            <section class="section section-intro section-masthead section_pt-large bg-accent-secondary-4 color-white"
                data-os-animation="data-os-animation">
                <div class="section-masthead__inner section-intro__inner container">
                    <header class="row section-intro__header section-masthead__header">
                        <div class="col-lg-12 text-center">
                            <div class="container py-5">
                                <h1 class="p_50 section-masthead__heading section-intro__heading split-text js-split-text text-xl"
                                    data-split-text-type="lines, words, chars" data-split-text-set="chars"> Contact</h1>
                            </div>
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
            <!-- section MAP -->
            <section class="section section-map bg-white  section_h-500">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.741335394548!2d3.4389202140530233!3d6.427268795349851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf59534b68e5b%3A0x918050fb5c03304b!2sThe%20Ark%20Tower!5e0!3m2!1sen!2sng!4v1631629669998!5m2!1sen!2sng"
                    width="100%" style="height: 100%;" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0" loading="lazy"></iframe>
            </section>
            <!-- - section MAP -->
            <!-- section FORM -->
            <div class="bg-white">
                <section class="section section-form text-center section_pb-small section-offset_top">
                    <div class="container border-radius section-offset__content ">
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <form class="form form-contact" action="{{ route('appointment.store') }}" method="POST"
                                    enctype="multipart/form-data" name="slider" id="slider">
                                    @csrf
                                    @method('POST')
                                    @if(session()->has('message'))
                                    <div class="alert alert-success w-50" role="alert">
                                        <button class="close" data-dismiss="alert"></button>
                                        <strong> {{ session()->get('message') }}</strong>
                                    </div>
                                    @endif
    
                                    @if(session()->has('error'))
                                    <div class="alert alert-danger w-50" role="alert">
                                        <button class="close" data-dismiss="alert"></button>
                                        <strong> {{ session()->get('error') }}</strong>
                                    </div>
                                    @endif
                                    <h3 class="form__heading">Get in Touch with Us!</h3>
                                    <div class="row form__row">
                                        <div class="col-lg-6 form__col">
                                            <label class="input-float js-input-float">
                                                <input class="input-float__input" type="text" id="name" name="name"
                                                    required="required" data-msg="Please enter your name" /><span
                                                    class="input-float__label">Your Name</span><span
                                                    class="form__error"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 form__col">
                                            <label class="input-float js-input-float">
                                                <input class="input-float__input" type="email" id="email" name="email"
                                                    required="required" data-msg="Please enter a correct e-mail" /><span
                                                    class="input-float__label">Your E-mail</span><span
                                                    class="form__error"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form__row">
                                        <div class="col form__col">
                                            <label class="input-float js-input-float">
                                                <textarea class="input-float__input input-float__input_textarea"
                                                    name="about" id="about"></textarea><span
                                                    class="input-float__label">Your
                                                    Message</span><span class="form__error"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form__row">
                                        <div class="col form__col form__col_submit">
                                            <button
                                                class="button button_solid button_accent-secondary-2 button_fullwidth"
                                                type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- - section FORM -->

        </div>
    </main>
    @endsection

    @section('footer')
    @include('partials.footer')
    @endsection
