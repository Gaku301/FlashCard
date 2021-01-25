<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function __construct()
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
        $json_data = curl_exec($ch);

        // 文字列から配列に変換
        $this->contents = json_decode($json_data);
    }

    public function getApi()
    {
        return view('table', ['contents' => $this->contents]);
    }

    public function show(int $num)
    {
        $content = $this->contents->{'docs'}[$num]->{'head'};
        // dd($content);

        return view('show', ['content' => $content]);
    }
}
