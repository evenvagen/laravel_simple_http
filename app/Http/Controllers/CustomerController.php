<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function index(){
        $customer = Http::withBasicAuth(env('API_USERNAME'), env('API_PASSWORD'))
        ->get('https://aksel.frb.io/wp-json/wc/v3/customers')->json();

        return $customer;
    }
}
