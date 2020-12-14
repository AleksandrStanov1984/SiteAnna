<?php

namespace App\Http\Controllers;

use App\Models\ContactDB;
use Illuminate\Http\Request;
//use App\Models\ContactDB;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $reviews = new ContactDB();
        return view('about', ['reviews'=>$reviews->all()]);
    }

    public function review()
    {
        $reviews = new ContactDB();
        return view('review', ['reviews'=>$reviews->all()]);
    }

    public function ourContacts()
    {
        return view('ourContacts');
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:20',
            'email' => 'required|min:10|max:50',
            'subject' => 'max:100|min:1',
            'message' => 'required|min:15|max:500'
        ]);

        $review = new ContactDB();
        $review->name = $request->input('name');
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
