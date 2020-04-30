<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
             'tweets' => auth()->user()->timeline()
            ]);
       



        // $ids=auth()->user()->follows->pluck('id');
       // return Tweet::whereIn('id', $ids)->latest()->get();
    }
    
    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);
        
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/home');
    }
}
