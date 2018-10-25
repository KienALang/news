<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\Models\User::all()->pluck('id')->toArray();
        $news = App\Models\News::all()->pluck('id')->toArray();
        factory(App\Models\Comment::class,10)->create([
            'user_id' => array_random($users),
            'news_id' => array_random($news),
        ]);
    }
}
