<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RajaOngkirController extends Controller
{
    public static function provinsi()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/province',
                [
                    'headers' => [
                        'key' => 'b27eb463ef7f00b0ed604163502f4575'
                    ]
                ]);
        
        return json_decode($response->getBody())->rajaongkir->results;
    }

    public function kota(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/city',
                [
                    'headers' => [
                        'key' => 'b27eb463ef7f00b0ed604163502f4575'
                    ],
                    'query' => [
                        'province' => $request->provinsi
                    ]
                ]);

        return json_decode($response->getBody())->rajaongkir->results;
    }

    public function ongkir(Request $request)
    {
        $client = new Client();
        $alamat = json_decode(auth()->user()->alamat);
        $response = $client->request('POST', 'https://api.rajaongkir.com/starter/cost',
                [
                    'headers' => [
                        'key' => 'b27eb463ef7f00b0ed604163502f4575'
                    ],
                    'form_params' => [
                        'origin' => '497',
                        'destination' => $alamat->kota_id,
                        'weight' => '1000',
                        'courier' => $request->kurir
                    ]
                ]);

        return json_decode($response->getBody())->rajaongkir->results[0]->costs[0]->cost[0]->value;        
    }
}
