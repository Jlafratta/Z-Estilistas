<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpio toda la data de usuarios
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $pass = Hash::make('123123123');

        User::create([
            'name' => 'Maravilla Martinez',
            'email' => 'client@zestilistas.com',
            'password' => $pass,
            'phoneline' => 2235997823,
        ]);

        User::create([
            'name' => 'Roy Jones',
            'email' => 'employee@zestilistas.com',
            'password' => $pass,
            'phoneline' => 2235997823,
        ]);

        User::create([
            'name' => 'Mike Tyson',
            'email' => 'admin@zestilistas.com',
            'password' => $pass,
            'phoneline' => 2235997823,
        ]);

        DB::statement("INSERT into role_user (user_id,  role_id) values (1, 1);");
        DB::statement("INSERT into role_user (user_id,  role_id) values (2, 2);");
        DB::statement("INSERT into role_user (user_id,  role_id) values (3, 3);");

        $faker = \Faker\Factory::create('es_ES');

        for($i = 4; $i < 104; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $pass,
                'phoneline' => $faker->e164PhoneNumber,
            ]);
            DB::statement("INSERT into role_user (user_id,  role_id) values ($i, 1);");
        }
    }
}
