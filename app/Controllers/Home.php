<?php

namespace App\Controllers;

use App\Models\Models;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('index');
    // }
    public function faq()
    {
        return view('faq');
    }
    public function contact()
    {
        return view('contact');
    }
    public function gallerytwo()
    {
        return view('gallerytwo');
    }
    public function gallery()
    {
        $model = new Models();
        $data['media'] = $model->getdata();
        return view('gallery', $data);
    }
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        return view('index');
    }
}
