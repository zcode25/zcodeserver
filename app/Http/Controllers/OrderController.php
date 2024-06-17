<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('order.lite');
    }

    public function save(Request $request) {
        $validatedData = $request->validate([
            'customerName' => 'required|max:100',
            'customerType' => 'required|max:20',
            'customerEmail' => 'required|max:50',
            'customerTel' => 'required|max:15',
            'customerAddress' => 'required|max:200',
            'businessName' => 'required|max:100',
            'businessField' => 'required|max:20',
            'businessDesc' => 'required|max:200',
            'webDesc' => 'required|max:200',
            'webLink' => 'required|max:200',
            'webPackage' => 'required|max:20',
            'price' => 'required',
            'discount' => 'required',
            'total' => 'required',
        ]);
    }
}
