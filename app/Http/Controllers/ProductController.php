<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(){
        $product = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/products');

        return $product;
    }
}
