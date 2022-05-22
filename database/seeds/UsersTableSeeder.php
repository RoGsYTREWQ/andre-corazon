<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
    	User::create([
    		'name' => 'Rodrigo Galicia',
	        'email' => 'rodrigo.galicia.sandoval@gmail.com',
	        'password' => bcrypt('ro8ktaciturno'),
	        'role' => 'admin'
    	]);

        // 2
        User::create([
            'name' => 'Paciente Test',
            'email' => 'rodrigosinguion@gmail.com',
            'password' => bcrypt('root123456'),
            'role' => 'patient'
        ]);

        // 3
        User::create([
            'name' => 'Esmeralda Preciado',
            'email' => 'danoreply@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 'doctor'
        ]);

        factory(User::class, 50)->states('patient')->create();
    }
}
