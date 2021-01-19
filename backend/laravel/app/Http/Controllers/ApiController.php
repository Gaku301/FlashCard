<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function api(Request $request)
    {
        $api = $request->api;
    }

    public function get_api()
    {
        $access_token = 'def43930c40f7ba453016f70b86d59323cd1475360d201c917fa14d44bacbd18';
        $url = 'https://boostnote.io/api/docs';

        // cURLセッション初期化
        $ch = curl_init();
        // 転送時のオプションを設定
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.$access_token,
            'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
        ]);
        // 転送実行後、レスポンスを取得し保存
        $response = curl_exec($ch);

        // 文字列から配列に変換
        $response_ary = json_decode($response);
        $content = $response_ary->{'docs'}[2]->{'head'}->{'content'};
        // dd($title);

        return view('index', ['content' => $content]);
    }
}