<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // user::create([
        //     'name'=>'suyash dhakal',
        //     'email'=>'dhakalsuyash@gmail.com',
        //     'age'=>'20',
        //     'city'=>'dharan'
        // ]);
        for($i=1;$i<=50;$i++){
            user::create([
                'name'=>fake()->name(),
                'email'=>fake()->unique()->email(),
                'age'=>fake()->numberBetween($int1=16,$int2=50),
                'city'=>fake()->city()
            ]);
        }
     
    }
}
