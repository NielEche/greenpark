@extends('layouts.app')

@section('title')
NEWS
@endsection

@section('content')
@php( $newss = \App\Models\News::all() )
<!-- Content -->

<div class="page-wrapper" data-barba="container">
    <main class="page-wrapper__content">
        <!-- section INTRO -->
        <section class="section section-intro section-masthead section_pt-large bg-accent-secondary-4 color-white"
            data-os-animation="data-os-animation">
            <div class="section-masthead__inner section-intro__inner container">
                <header class="row section-intro__header section-masthead__header">
                    <div class="col-lg-12 text-center">
                        <div class="container py-5">
                            <h1 class="p_50 section-masthead__heading section-intro__heading split-text js-split-text text-xl"
                                data-split-text-type="lines, words, chars" data-split-text-set="chars"> News</h1>
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
        <div class="container-fluid container_xs-no-padding">
            <!-- section BLOG -->
            <section class="section section-blog section_mt-small bg-white section_pt-small section_pb">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-8">
                            <div class="section-blog__posts">
                                <div class="section-blog__wrapper-post">
                                    <article class="post">
                                        <div class="post__media"><img src="{{ asset('uploads/news') }}/{{ $news->file_path }}" alt="" />
                                        </div>
                                        <!-- - .post__media-->
                                        <div class="post__content">
                                            <h2>{{$news['title']}}</h2>
                                            <p>{!! $news->about !!}</p>
                                        </div>
                                        <!-- - .post__content-->
                                    </article>
                                </div>
                            </div>
                            <!-- - post-->
                        </div>
                        <div class="col-lg-3">
                            <aside class="sidebar sidebar_no-margin-last-widget widget-area">
                                <!--  <section class="widget widget_search">
                                    <form class="search-form" action="blog.html" method="get">
                                        <div class="input-float input-search js-input-float">
                                            <input class="input-float__input input-search__input" type="search" /><span
                                                class="input-float__label">Search...</span>
                                            <button class="input-search__submit material-icons"
                                                type="submit">search</button>
                                        </div>
                                    </form>
                                </section> --->
                                <!-- .search -->
                                <section class="widget widget_recent_entries">
                                    <h2 class="widgettitle">Recent Posts</h2>
                                    <ul>
                                        @foreach($newss as $key => $data)
                                        <li><a href="{{ route('showNews', [ $data->id]) }}"><span>{{$data->title}}</span></a>
                                            <div class="post-date">{{ \Carbon\Carbon::parse($data->created_at)->format('M d Y')}}</div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </section>
                                <!-- .recent entries-->
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- - section BLOG -->
        </div>
    </main>
    @endsection

    @section('footer')
    @include('partials.footer')
    @endsection
