<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');

    }

    public function about()
    {
        return view('about');

    }

    public function review()
    {
        return view('review');

    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:20',
            'email' => 'required|min:1|max:50',
            'subject' => 'max:100',
            'message' => 'required|min:15|max:1000'
        ]);

    }
}
