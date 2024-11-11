<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detail(Request $request)
    {
        $productId = $request->only(['id']);
        return view('detail', ['productId' => $productId]);
    }
}