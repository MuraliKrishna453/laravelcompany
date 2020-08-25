<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industry;
use App\Company;

class CompanyController extends Controller {

    //

    public function industries() {
        $industries = Industry::all();
        return view('industries', compact('industries'));
    }

    public function industryCompanies($section) {
        $industry = Industry::where('section', $section)->first();
        $companies = Company::where('industry_id', $industry->id)->get();
        return view('industryCompanies', compact('companies'));
    }

    public function company($slug) {
        $company = Company::where('slug', $slug)->first();
        return view('company', compact('company'));
    }

    public function create(Request $request) {
        $industries = Industry::all();
        return view('create', compact('industries'));
    }

    public function postIndustry(Request $request) {

        $request['name'] = strtolower($request->name);
        $this->validate($request, [
            'name' => 'required|unique:industries,name',
            'section' => 'required|unique:industries,section'
        ]);

        $industry = new Industry();
        $industry->name = $request->name;
        $industry->section = $request->section;
        $industry->save();
        return redirect()->back()->with('success', "Industry created successfully");
    }

    public function postCompany(Request $request) {

        $request['name'] = strtolower($request->name);
        $request['cin'] = strtolower($request->cin);
        $request['slug'] = \Str::slug($request->name);
        $this->validate($request, [
            'name' => 'required|unique:companies,name',
            'slug' => 'required|unique:companies,slug',
            'cin' => 'required|unique:companies,cin',
            'class' => 'required',
            'status' => 'required',
            'industry' => 'required'
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->slug = $request->slug;
        $company->class = $request->class;
        $company->cin = $request->cin;
        $company->status = $request->status;
        $company->industry_id = $request->industry;
        $company->save();
        return redirect()->back()->with('success', "Industry created successfully");
    }

}
