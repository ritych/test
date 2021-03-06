<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Jenssegers\Agent\Agent;

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
            'captcha' => 'required|captcha',
        ]);
        $data['ip'] = $request->ip();
		$agent = new Agent();
        $data['browser'] = $agent->browser();
        Comment::CreateComment($data);
        return redirect('/')->with('message', trans('strings.message_add'));
    }

    public function refreshCaptcha(){
        return response()->json(['captcha' => captcha_img()]);
    }
}