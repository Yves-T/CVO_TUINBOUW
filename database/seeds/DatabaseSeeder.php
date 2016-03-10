<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'admin', 'email' => 'admin@cvo.be', 'password' => Hash::make('secret')],
            ['name' => 'student', 'email' => 'student@cvo.be', 'password' => Hash::make('secret')]
        );

        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }
}
