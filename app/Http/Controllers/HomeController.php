<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class HomeController extends Controller
{
    public function front(){
        $comments = Comment::getAllComments();
        return view('home', compact('comments'));
    }

    public function submit(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'url' => 'url|max:255',
            'description' => 'required|max:255',
        ]);
        Comment::CreateComment($data);
        return redirect('/')->with('message', 'Отзыв добавлен!');
    }
}