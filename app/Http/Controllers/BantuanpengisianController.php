<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanpengisianController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.bantuanpengisian');
    }
}
