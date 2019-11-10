<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'go to the store',
            'to the market',
            'to work'
        ];
        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}

