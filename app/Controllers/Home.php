<?php

namespace App\Controllers;
use App\Models\Models;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('index');
    // }
     public function index()
    {
        $model = new Models();
        $data['media'] = $model->getdata();
        return view('Gallery',$data);
    }
}
