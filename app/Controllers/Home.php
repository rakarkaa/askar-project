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

    public function v()
    {

        return view('Visitor');
    }

    public function visitor()
    {
        $a = $this->request->getpost('nama');
        $b = $this->request->getpost('instagram');
        $c = $this->request->getpost('paket');
        $d = $this->request->getpost('estimasi');
        $e = $this->request->getpost('budget');
        $f = $this->request->getpost('q1');
        $g = $this->request->getpost('q2');

        $s = array(
            'visitor_nama' => $a,
            'visitor_instagram' => $b,
            'visitor_paket' => $c,
            'visitor_estimasi' => $d,
            'visitor_budget' => $e,
            'visitor_q1' => $f,
            'visitor_q2' => $g
        );
        $model = new Models();


        if ($model->vis($s)) {
            $file = ROOTPATH . 'public/uploads/1719930222_2ca6a83bac9fc8f5d558.png';
            return $this->response->download($file, 'pricelist');
        // } else {
        //     return redirect()->to(base_url('Home/index'));
        }
    }
}
