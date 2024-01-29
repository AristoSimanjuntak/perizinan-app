<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login/indexView');
    }    

    public function dashboard()
    {
        return view('layouts/indexView');
    }
    public function permohonanBaru()
    {
        return view('pages/permohonanbaru');
    }
}
