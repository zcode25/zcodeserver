<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OrderController extends Controller
{
    public function index() {
        return view('order.lite');
    }

    public function save(Request $request) {
        $validatedData = $request->validate([
            'clientName' => 'required|max:100',
            'clientType' => 'required|max:20',
            'clientEmail' => 'required|email|max:50',
            'clientTel' => 'required|max:15',
            'clientAddress' => 'required|max:200',
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

        $validatedData['orderDate'] = date();
        $validatedData['orderId'] = IdGenerator::generate(['table' => 'orders', 'field' => 'orderId', 'length' => 20, 'prefix' => 'ZCODE-CO-'. date('y-m-d', strtotime($validatedData['assetProcurementDate'])) . '/']);
    }
}
