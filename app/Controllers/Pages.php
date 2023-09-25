<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | JDIH'
        ];
        return view('back/pages/index', $data);
    }

    public function data_peraturan(){
        $data = [
            'title' => 'Database Peraturan'
        ];
        
        return view('pages/data_peraturan', $data);
    }
}
