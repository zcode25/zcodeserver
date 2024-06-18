<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OrderController extends Controller
{
    public function lite() {
        return view('order.lite');
    }

    public function professional() {
        return view('order.professional');
    }

    public function save(Request $request) {
        $validatedData = $request->validate([
            'clientName' => 'required|max:100',
            'clientType' => 'required|max:25',
            'clientEmail' => 'required|email|max:50',
            'clientTel' => 'required|max:15',
            'clientAddress' => 'required|max:200',
            'businessName' => 'required|max:100',
            'businessField' => 'required|max:20',
            'businessDesc' => 'required|max:200',
            'webDesc' => 'required|max:200',
            'webLink' => 'max:200',
            'webDoc' => 'mimes:doc,docx,pdf,png,jpg|max:5048',
            'webPackage' => 'required|max:20',
            'price' => 'required',
            'discount' => 'required',
            'total' => 'required',
        ]);

        $validatedData['orderDate'] = date('Y-m-d');
        $validatedData['orderId'] = IdGenerator::generate(['table' => 'orders', 'field' => 'orderId', 'length' => 25, 'prefix' => 'ZCODE-CO-'. date('y-m-d', strtotime($validatedData['orderDate'])) . '-']);
        
        if($request->file('webDoc')) {
            $validatedData['webDoc'] = $request->file('webDoc')->store('webDoc');
        }

        Order::create($validatedData);

        return 'ok';
    
    }
}
