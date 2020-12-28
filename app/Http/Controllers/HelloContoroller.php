<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body{
//     font-size: 16pt;
//     color: #999;
// }
// h1{
//     font-size:100pt;
//     text-align: right;
//     color: #eee;
//     margin: -40px 0px -50px 0px;
//   }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt){
//     return "<{$tag}>". $txt. "</{$tag}>";
// }

class HelloContoroller extends Controller
{

    public function index(){
        $data = ['msg'=>'これはBladeを利用したサンプルです。'];
        return view('hello.index',$data);
    }
    // public function index(){
    //     $data = ['msg'=>'これはコントローラから渡されたメッセージです。'];
    //     return view('hello.index',$data);
    // }

// public function index(){
//     return view('hello.index');
// }

    // public function index(Request $request, Response $response){
    //     $html = <<<EOF
    //     <html>
    //     <head>
    //     <style>
    //         body{
    //             font-size: 16pt;
    //             color: #999;
    //         }
    //         h1{
    //             font-size:100pt;
    //             text-align: right;
    //             color: #eee;
    //             margin: -40px 0px -50px 0px;
    //         }
    //     </style>
    //     </head>
    //     <body>
    //     <h1>Hello</h1>
    //     <h3>Request</h3>
    //     <pre>{$request}</pre>
    //     <h3>Response</h3>
    //     <pre>{$response}</pre>
    //     </body>
    //     </html>
    //     EOF;

    //     $response -> setContent($html);
    //     return $response;
     
    // }

    // public function index(Request $request, Response $response){
    //     global $head, $style, $body, $end;

    //     $html = $head. tag('title', 'hello/index').$style. $body
    //     . tag('h1', 'Hello'). tag('p', 'this is Index page')
    //     . '<a href="/hello/other">go to Other page</a>'
    //     . $end;
    //     return $html;
    // }

    // public function other(){
    //     global $head, $style, $body, $end;

    //     $html = $head. tag('title', 'hello/other').$style. $body
    //     . tag('h1', 'Other'). tag('p', 'this is Other page')
    //     . $end;
    //     return $html;
    // }
}
