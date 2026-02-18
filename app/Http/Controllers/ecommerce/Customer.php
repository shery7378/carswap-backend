<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customer extends Controller
{
    public function index()
    {
        $pageConfigs = ['myLayout' => 'vertical'];
        return view('content.apps.ecommerce.ecommerce-customer', ['pageConfigs' => $pageConfigs]);
    }
}
