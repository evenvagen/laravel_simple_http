<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index(){
        $order = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/orders')->json();

        return $order;
    }

    public function show($id)
    {
        $order = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/orders/'.$id)->json()['total_tax'];

        return $order;
    }
}
