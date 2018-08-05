<?php

use Illuminate\Database\Seeder;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(['name' => 'Lorem', 'email' => 'Lorem@Lorem.ipsum', 'url' => 'http://Lorem.ipsum',
                         'description' => 'Lorem ipsum', 'ip' => '0.0.0.0', 'browser' => 'mozilla']);
    }
}
