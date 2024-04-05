<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // [
            //     "name" => "ficougg1@exdonuts.com",
            //     "email" => "ficougg1@exdonuts.com",
            //     "password" => bcrypt("123456"),
            //     "birthdate" => "2024-04-04"
            // ],
            // [
            //     "name" => "afxanounfif8@exdonuts.com",
            //     "email" => "afxanounfif8@exdonuts.com",
            //     "password" => bcrypt("123456"),
            //     "birthdate" => "2024-04-05"
            // ],
            // [
            //     "name" => "agolieold@ruru.be",
            //     "email" => "agolieold@ruru.be",
            //     "password" => bcrypt("123456"),
            //     "birthdate" => "2024-04-05"
            // ],
            // [
            //     "name" => "muhammadnurdinnullah",
            //     "email" => "muhammadnurdinnullah@gmail.com",
            //     "password" => bcrypt("123456"),
            //     "birthdate" => "2024-04-05"
            // ],
            [
                "name" => "dida09070",
                "email" => "dida09070@gmail.com",
                "password" => bcrypt("123456"),
                "birthdate" => "2024-04-05"
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
