<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function introduction()
    {
        return view('frontend.introduction');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function training()
    {
        return view('frontend.training');
    }

    public function projects()
    {
        return view('frontend.projects');
    }

    public function recruitment()
    {
        return view('frontend.recruitment');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

}
