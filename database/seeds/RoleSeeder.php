<?php

use Illuminate\Database\Seeder;
use App\Roles_M;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Roles_M();
        $role->role_name = "";
        $role->save();
    }
}
