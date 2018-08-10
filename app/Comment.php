<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $table = 'comment';
    protected $fillable= ['name', 'email', 'url', 'description', 'ip', 'browser'];

    public static function getAllComments()
    {
        return self::paginate(10);
    }

    public static function CreateComment($data)
    {
        return self::create($data);
    }
}