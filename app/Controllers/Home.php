<?php

namespace App\Controllers;

use App\Models\PeraturanModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->peraturanModel = new PeraturanModel();
    }

    protected $peraturanModel;
    public function index()
    {
        $this->peraturanModel = new PeraturanModel();
        $data = [
            'title' => 'JDIH',
            'peraturan' => $this->peraturanModel->getPeraturan()
        ];
        return view('front/pages/index', $data);
    }

    // protected $peraturanModel;
    // public function peraturan()
    // {
    //     $this->peraturanModel = new PeraturanModel();
    //     $data = [
    //         'peraturan' => $this->peraturanModel->getPeraturan()
    //     ];
    //     return view('front/pages/index', $data);
    // }
}
