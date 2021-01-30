<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function($user) {
            factory(App\Category::class, 3)->create(['user_id' => $user->id])->each(function($category) {
                $category->save();
            });
        });
    }
}
