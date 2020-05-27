<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //  factory(App\Models\User::class, 1)->create();
        $this->call(UserTableSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SetSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ContentSeeder::class);
        $this->call(ComponentSeeder::class);
    }
}
