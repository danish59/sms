<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new AdminUser();

        $user->name = "admindanish";
        $user->email = "admindanish@test.com";
        $user->password = crypt("secret","");
        $user->save();
    }
}
