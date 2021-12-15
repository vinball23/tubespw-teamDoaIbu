<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class CountryController extends Controller
{
    public function index() {
        return view('countries', [
            "title" => "Countries",
            "active" => 'countries',
            'countries' => Country::all()
        ]);
    }
}
