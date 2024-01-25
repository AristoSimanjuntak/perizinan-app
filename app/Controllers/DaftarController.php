<?php

namespace App\Controllers;

class DaftarController extends BaseController
{
    public function index(): string
    {
        return view('daftar/indexView');
    }   
}
