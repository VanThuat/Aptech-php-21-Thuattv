<?php

use Illuminate\Database\Seeder;

class sanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 

            //Tao du lieu ngau nhien (random)

            // DB::table('users')->insert([
            //     'name'=> str_random(10),
            //     'email'=> str_random(10).'gmail.com',
            //     'password'=> bcrypt('secret'),
            //     'address'=>str_random(20),
            // ]);

            //Tao du lieu faker
            DB::table('sanPham')->insert([
                'name' => str_random(10),
                'price' => str_random(4),
                'description' => str_random(100),
            ]);
    }
}
}