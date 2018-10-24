<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = App\Models\Category::all()->pluck('id')->toArray();
        factory(App\Models\News::class, 10)->create([
            'category_id' => array_random($categories),
        ]);
    }
}
