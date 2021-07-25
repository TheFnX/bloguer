<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Beto Dubal',
            'email' => 'beto.dubal@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::factory(99)->create();
    }
}
