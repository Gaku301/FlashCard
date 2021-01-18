<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function api(Request $request)
    {
        dd($request);
        $api = $request->api;
    }

    public function get_api()
    {
        $access_token = 'def43930c40f7ba453016f70b86d59323cd1475360d201c917fa14d44bacbd18';
        $url = 'https://boostnote.io/api/docs';
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_HEADER, [
        //     'Content-Type: application/json; charser=UTF-8',
        //     'Authorization: Bearer ['.$access_token.']',
        // ]);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt();

        return view('index');
    }
}
