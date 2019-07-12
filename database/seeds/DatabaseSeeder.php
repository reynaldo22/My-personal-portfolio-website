<?php

use Illuminate\Database\Seeder;
use App\About;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $about = About::create([
            'description' => 'An 19 years old, an Tech Enthusiast, an Traveller, living in <a style="text-decoration:none;">Indonesia</a> 
            also an Computer Science student. Have 3 years experience in Web Development, with worldwide <a>clients</a> and always available.'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
