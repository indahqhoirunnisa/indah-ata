<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public static function config($order_id, $total)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'Mid-server-2-mKP0FFR6zO9GEOUTEFb8TM';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = FALSE;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = FALSE;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id,
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->no_telp,
            ),
        );
        
        return \Midtrans\Snap::getSnapToken($params);
    }
}
