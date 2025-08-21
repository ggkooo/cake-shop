<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(): View
    {
        $data['categories'] = Category::all()->take(5);
        $data['products'] = Product::all()->take(20);
        $data['latests'] = Product::latest()->take(5)->get();

        return view('layout.index', [
            'page' => 'test',
            'categories' => $data['categories'],
            'products' => $data['products'],
            'latests' => $data['latests'],
        ]);
    }
}
