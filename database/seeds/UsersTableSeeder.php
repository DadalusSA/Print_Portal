<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'          => 'Admin',
            'email'         => 'admin@demo.com',
            'password'      => bcrypt('secret'),
            'mobile_number'        => '88888888',
            'gpn_number'          => 'G18',
            'desk_location' => 'desk07',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);
    }
}

