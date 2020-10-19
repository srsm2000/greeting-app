<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function show($greeting)
    {
        $array = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $response = $array[array_rand($array)];
        switch ($greeting) {
            case 'morning':
                $main = '朝のあいさつ';
                $sub = 'おはようございます';
                break;
            case 'afternoon':
                $main = '昼のあいさつ';
                $sub = 'こんにちは';
                break;
            case 'evening':
                $main = '夕方のあいさつ';
                $sub = 'こんばんは';
                break;
            case 'night':
                $main = '夜のあいさつ';
                $sub = 'おやすみ';
                break;
            case 'random':
                $main = 'ランダムなメッセージ';
                $sub = $response;
                break;
            default:
                $main = '自由なメッセージ';
                $sub = $greeting;
        }
        return view('comments.show', ['main' => $main, 'sub' => $sub]);
    }
}
