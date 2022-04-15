<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'admin',],
            ['name' => 'user',]
        ];

        foreach ($users as $user) {
            Role::create($user);
        }
    }
}
