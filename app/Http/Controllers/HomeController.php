<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $faqs = Faq::all();

        return view('layouts/landing', compact('banners', 'faqs'));
    }
}
