<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    

    public function index()
    {
        $item = [
            'content' => 'メールアドレス',
        ];
        return view('index', $item);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => 'お問い合わせ完了ページ',
        
        ];
        return view('index', $item);
    }
}