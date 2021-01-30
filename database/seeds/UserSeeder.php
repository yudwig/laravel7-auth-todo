<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1; $i++) {
            $user = factory(App\User::class)->create();
            $user->save();
        }
    }
}
