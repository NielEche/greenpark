@extends('layouts.app')

@section('title')
CORPORATE GOVERNANCE
@endsection

@section('content')
<main class="content-row">
    <div class="page-header page-header-05">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">@yield('title')</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="content-title--04">Practice Areas</h3>
                <ul class="sidebar-menu-list ">
                    <li class="{{ (\Request::route()->getName() == 'companyInvestmentLaws') ? ' active' : '' }}">
                        <a href="{{ route('companyInvestmentLaws') }}">Company & Investment Laws</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'OilandGas') ? ' active' : '' }}">
                        <a href="{{ route('OilandGas') }}">Oil & Gas</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'telecomPatentTrademarks') ? ' active' : '' }}">
                        <a href="{{ route('telecomPatentTrademarks') }}">Telecomms, Patents and Trademarks</a>
                    </li>
                    <li
                        class="{{ (\Request::route()->getName() == 'foreignInvestmentsDivestments') ? ' active' : '' }}">
                        <a href="{{ route('foreignInvestmentsDivestments') }}">Foreign Investments and Divestments</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'commercialLaws') ? ' active' : '' }}">
                        <a href="{{ route('commercialLaws') }}">Commercial Laws</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'bankingCorporateFinance') ? ' active' : '' }}">
                        <a href="{{ route('bankingCorporateFinance') }}">Banking and Corporate Finance</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'labourLaw') ? ' active' : '' }}">
                        <a href="{{ route('labourLaw') }}">Labour Law</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'corporateGovernance') ? ' active' : '' }}">
                        <a href="{{ route('corporateGovernance') }}">Corporate Governance</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'securitesCmi') ? ' active' : '' }}">
                        <a href="{{ route('securitesCmi') }}">Securities and Capital Market Issues</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'realEstate') ? ' active' : '' }}">
                        <a href="{{ route('realEstate') }}">Property & Real Estate</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'familyLaw') ? ' active' : '' }}">
                        <a href="{{ route('familyLaw') }}">Family Law</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'litigation') ? ' active' : '' }}">
                        <a href="{{ route('litigation') }}">Litigation</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'companySecretariat') ? ' active' : '' }}">
                        <a href="{{ route('companySecretariat') }}">Company Secretariat</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="single-content">
                    <p>We provide orientation, continuity, compliance and related training services for Boards of
                        companies, other private organisations and government agencies anddepartments. Our Corporate
                        Governance practice substantially works towards restructuring and remodeling companies and other
                        entities to comply with the extant codes of Corporate Governance</p>
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
