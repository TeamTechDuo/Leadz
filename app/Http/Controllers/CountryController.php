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
        return view('country.index');
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
        return redirect('/countries')->withSuccess('Country name successfully created');
    }

    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
