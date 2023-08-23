<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // how to pass data to view ?
        $title = 'Laravel Course';
        $x = 1;
        $y = 2;
        // return view('products.index', compact('title', 'x', 'y'));
        $name = "truong";
        // return view('products.index')->with('name', $name); // with("key", value)
        // 'with' method can only send 1 parameter 

        // send an associative array
        $myphone = [
            'name' => 'ip14',
            'year' => 2022,
            'isfavor' => true,
        ];
        // return view('products.index', compact('myphone'));

        //send directly
        // return view('products.index', [
        //     'myphone' => $myphone
        // ]);
        print_r(route('products'));
        return view('products.index');
    }

    public function about()
    {
        return view('This is About page');
    }

    public function detail($productName, $id)
    {
        return "product's name = " .$productName .", product's id = " .$id;
        // $phones = [
        //     'iphone15'=> 'iphone15',
        //     'samsung' => 'samsung'
        // ];
        // return view('products.index', [
        //     'product' => $phones[$productName] ?? ''
        // ]);
    }
}
