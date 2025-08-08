<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $teachers = Teacher::all();
        $profile = Profile::first();
        $services = Service::all();

        return view('welcome', compact('articles', 'teachers', 'profile', 'services'));
    }
}
