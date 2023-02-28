<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function join()
    {
        return view('auth.join');
    }

    public function dash()
    {
        return view('admin.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function experiences()
    {
        return view('pages.experiences');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function newsDetails()
    {
        return view('pages.newsDetails');
    }


    public function contact()
    {
        return view('pages.contact');
    }

    public function practiceArea()
    {
        return view('pages.practiceArea');
    }

    public function CompanyInvestmentLaws()
    {
        return view('pages.practiceAreas.company-investment-laws');
    }

    public function OilandGas()
    {
        return view('pages.practiceAreas.oil-and-gas');
    }

    public function telecomPatentTrademarks()
    {
        return view('pages.practiceAreas.telecom-patent');
    }

    public function foreignInvestmentsDivestments()
    {
        return view('pages.practiceAreas.foreign-investment');
    }

    public function commercialLaws()
    {
        return view('pages.practiceAreas.commercial-laws');
    }

    public function bankingCorporateFinance()
    {
        return view('pages.practiceAreas.banking-corporate-finance');
    }

    public function labourLaw()
    {
        return view('pages.practiceAreas.labour-law');
    }

    public function corporateGovernance()
    {
        return view('pages.practiceAreas.corporate-governance');
    }

    public function securitesCmi()
    {
        return view('pages.practiceAreas.securities-capital');
    }

    public function realEstate()
    {
        return view('pages.practiceAreas.property-real-estate');
    }

    public function familyLaw()
    {
        return view('pages.practiceAreas.family-laws');
    }

    public function litigation()
    {
        return view('pages.practiceAreas.litigation');
    }

    public function companySecretariat()
    {
        return view('pages.practiceAreas.company-secretariat');
    }
}

