<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('order.lite');
    }

    public function save(Request $request) {
        return $request;
    }
}
