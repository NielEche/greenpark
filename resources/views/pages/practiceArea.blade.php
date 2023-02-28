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
                    <h2 class="page-title">Practice Areas</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="content-title-02">The Firm’s Practice Areas</h3>
                <div class="content-subtitle-02">
                    <p style="font-weight: bold;">The Firm offers professional advice to local and overseas clients on
                        all aspects of Nigerian and International business law. Its target clients include public and
                        private companies and other commercial enterprises, individuals and corporate investors, financial
                        institutions and other participants in development and venture capital transactions.</p>
                    <p style="font-weight: bold;">Our services have been engaged in the negotiation and preparation of
                        pre-incorporation contracts, the formation and structuring of corporate entities, Shareholders
                        Agreements and Joint Venture structuring, Asset Sale, Acquisition, Transfer of Shares or Stocks
                        held by foreign and or local entities.</p>
                    <p style="font-weight: bold;">Our members have been involved as local Counsel in the Sales and
                        assignments of interests in oil blocks for indigenous oil exploration companies in
                        Nigeria, transactions in excess of $30 million USD. Members of our firm have also been involved in
                        issuing opinions and acting on behalf of the Bureau of Public Enterprises on the structuring of
                        public enterprises slated for privatization in the ongoing economic reforms in Nigeria.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($practices as $key => $data)

            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href={{"showpractice/".$data['id']}}>
                            <img class="pa-img" src="{{ asset('uploads/practiceAreas') }}/{{ $data->file_path }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href={{"showpractice/".$data['id']}}>
                                {{ $data->title }}</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>{!! $data->about !!}</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href={{"showpractice/".$data['id']}}>Read more</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="{{ route('companyInvestmentLaws') }}">
                            <img class="pa-img" src="{{ asset('files/img/ci.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="{{ route('companyInvestmentLaws') }}">Company & Investment Laws</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm offers professional advice to local and overseas clients on all aspects of
                                Nigerian and International business law.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('companyInvestmentLaws') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="{{ route('OilandGas') }}">
                            <img class="pa-img" src="{{ asset('files/img/oilgas.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="{{ route('OilandGas') }}">Oil & Gas</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The members of the Firm have proffered advice and acted on behalf of multinational
                                companies operating in Nigeria on varied aspects of their local activities…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('OilandGas') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="{{ route('telecomPatentTrademarks') }}">
                            <img class="pa-img" src="{{ asset('files/img/Telecoms.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="{{ route('telecomPatentTrademarks') }}">Telecomms, Patents and Trademarks</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm has proffered advice to and assisted individuals and corporate bodies in the
                                formation of and registration of telecommunication companies.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('telecomPatentTrademarks') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/fid.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Foreign Investments and Divestments</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm assists clients in complying with all requirements for running a business in
                                Nigeria such as obtaining business permits and or expatriate quota allocations…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('foreignInvestmentsDivestments') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <hr>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/about3.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Commercial Laws</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Members have considerable experience in Taxation, Commercial Contracts, Sale of
                                Goods, Insurance Law and Claims, Membership…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('commercialLaws') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/atm.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Banking and Corporate Finance</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>We provide comprehensive advice on all domestic and international banking operations,
                                including lending on the security of all forms of assets.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('bankingCorporateFinance') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/labour.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Labour Law</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm advises clients on all Labour related issues and assists in the preparation of
                                Employment Contracts and Employees Handbook.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('labourLaw') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/pa2.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Corporate Governance</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>We provide orientation, continuity, compliance and related training services for Boards of
                                companies, other private organisations and...</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('corporateGovernance') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <hr>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/capital.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Securities and Capital Market Issues</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Members have been active in the Nigerian capital market, having been part of the team
                                of Solicitors who acted at different times for Issuing Houses…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('securitesCmi') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/reale.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Property & Real Estate</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm acts for companies, financial institutions, investors, dealers, developers and
                                owners of property and has been engaged in all aspects of real property law</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('realEstate') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/familylaw.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Family Law</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>Our Family Law Practice essentially provides services with regard to child
                                adoption applications, child maintenance applications...</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('familyLaw') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/ligitation.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Litigation</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm’s litigation, arbitral and dispute mediation practice arises in the main, from
                                its general representation of clients engaged in the business…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('litigation') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/cs.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Company Secretarial</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm acts as external Company Secretaries to many commercial enterprises.Aside from
                                attendance at meetings and filing of requisite Statutory Returns... </p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('companySecretariat') }}">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="indents-20"></div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
