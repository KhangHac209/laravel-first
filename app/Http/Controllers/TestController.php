<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $title = 'My title';
        $xyz = 'hello world';

        //truyen xuong view
        //c1
        return view('test', [
            'title' => $title,
            'xyz' => $xyz
        ]);

        //c2
        //return view('test')->with('title', $title)->with('xyz', $xyz);

        //c3
        // return view('test', compact('title', 'xyz'));
    }
}
