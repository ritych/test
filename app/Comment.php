<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $table = 'comment';

    public static function getAllComments()
    {
        return self::paginate(10);
    }

    public static function CreateComment($data)
    {
        $comment = new \App\Comment;
        $comment->name = $data['name'];
        $comment->email = $data['email'];
        $comment->url = $data['url'];
        $comment->description = $data['description'];
        $comment->ip = $_SERVER['REMOTE_ADDR'];
        $comment->browser = $_SERVER['HTTP_USER_AGENT'];
        return $comment->save();
    }
}