<?php

namespace App\Http\Controllers;

use App\CompanyType;
use Illuminate\Http\Request;

class CompanyTypeController extends Controller
{
    public function index()
    {
        $company_types = CompanyType::all();
        return view('company-type.index', compact('company_types'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
        ]);

        $company_type = new CompanyType([
            'name' => $request->get('name'),
        ]);
        $company_type->save();
        return redirect('/companytype')->withSuccess('Company Type successfully created');
    }

    public function edit(CompanyType $company_type)
    {
        $company_type = CompanyType::find($company_type->id);
        return view('company-type.edit', compact('company_type'));
    }

    public function update(Request $request, CompanyType $company_type)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $company_type = CompanyType::find($company_type->id);
        $company_type->name = $request->get('name');
        $company_type->save();
        return redirect('/companytype');
    }

    public function destroy(CompanyType $company_type)
    {
        $company_type = CompanyType::find($company_type->id);
        $company_type->delete();
        return redirect('/companytype');
    }
}
