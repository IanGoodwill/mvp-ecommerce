<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
    
        foreach( range(1, 30) as $index ) {
            DB::table( 'users' )->insert( array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'created_at' => date( "Y-m-d H:i:s" ),
            ));
    }
    $admin = [
        [
            'name' => "Test",
            'email' => "admin@gmail.com",
            'password' => bcrypt("testing123"),
            'created_at' => date( "Y-m-d H:i:s" ),
            'is_admin' => 1

        ]
        ];

        DB::table('users')->insert($admin);
    }
}
