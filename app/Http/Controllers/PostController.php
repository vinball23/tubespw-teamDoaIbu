<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;

class PostController extends Controller{
    public function index() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
            $active = 'categories';
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
            $active = 'home';
        }

        if(request('country')) {
            $country = Country::firstWhere('slug', request('country'));
            $title = ' from ' . $country->name;
            $active = 'countries';
        }

        return view('posts', [
            "title" => "All Recipes" . $title,
            "active" => 'home',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author', 'country']))->paginate(8)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "active" => 'home',
            "post" => $post
        ]);
    }
}
