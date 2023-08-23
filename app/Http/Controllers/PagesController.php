<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $name = 'TRUONG';
        $names = array('Truong', 'Ngan', 'Ngoc', 'Hoang');
        // $names = [];
        // return view('index')->with('name', $name);
        return view ('index', [
            'names' => $names,
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
