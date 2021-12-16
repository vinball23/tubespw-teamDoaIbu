<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.countries.index', [
            'countries' => Country::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.countries.create', [
            'categories' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required | max:255',
            'slug' => 'required | unique:countries'
        ]);

        Country::create($validatedData);

        return redirect('/dashboard/countries')->with('success', 'New country has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('country', [
            "title" => "Single Post",
            "active" => 'home',
            "country" => $country
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('dashboard.countries.edit', [
            'country' => $country
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Country::where('id', $country->id)
            ->update($validatedData);

        return redirect('/dashboard/countries')->with('success', 'Countries has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        Post::where('country_id', $country->id)->delete();

        Country::destroy($country->id);
        return redirect('/dashboard/countries')->with('success', 'Countries has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
