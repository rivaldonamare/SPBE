<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugaspenilaianmandiriController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.tugaspenilaianmandiri');
    }
}
