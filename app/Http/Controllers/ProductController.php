<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function showProducts(){
        $product = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/products/')->json();

        return $product;
    }

    public function showProduct($name = null){

        $product = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/products/'.$name)->json();

        return $product;
    }

    public function getSlug($slug){
        $product = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/products?slug='.$slug)->json();

        return $product;
    }

    public function showProductAttributes(){
    $productAttributes = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
    ->get('https://aksel.frb.io/wp-json/wc/v3/products/attributes')->json();

    return $productAttributes;
    }

    public function showProductAttributesTerms($id = null){
        $AttributesTerms = Http::withBasicAuth(
            env('API_USERNAME'),
            env('API_PASSWORD')
        )->get('https://aksel.frb.io/wp-json/wc/v3/products/attributes/'.$id.'/terms')
        ->json();


        return $AttributesTerms;
    }

}
