<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
Use Alert;
use App\User;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('country.index', compact('countries'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        if (isset($request->validator) && $request->validator->fails()) {
            return back()->with('error', $validator->messages()->all()[0])->withInput();
        }

        $country = new Country([
            'name' => $request->get('name'),
        ]);
        $country->save();
        return redirect('/country')->withSuccess('Country name successfully created');
    }

    public function edit(Country $country)
    {
        $country = Country::find($country->id);
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $country = Country::find($country->id);
        $country->name = $request->get('name');
        $country->save();
        return redirect('/country');
    }

    public function destroy(Country $country)
    {
        $country = Country::find($country->id);
        $country->delete();
        return redirect('/country');
    }
}
