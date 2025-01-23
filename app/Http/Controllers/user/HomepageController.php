<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function user_home_page()
    {
        $category =  Category::get('title')->toArray();
        return view('user.welcome', compact('category'));
    }
}
