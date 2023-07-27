<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // ProductSeeder::class
            // CategorySeeder::class
            UserSeeder::class
        ]);
        // $category = [
        //             "name" => "Ngyen Duc Hieu",
        //             "brand" => "iphone",
        //             "description" => "hai name ",
        //             "price" => 100,
        //             "quantity" => 10,
        //             "image" => "xxx",
        //     //         "address" => "16 nguyen xa",
        //     //         "date_of_birth" => "2023-08-01",
        //     //         "status" => 2,
        //     //         "created_at" => date('Y-m-d H:i:s'),
        //     //         "updated_at" => date('Y-m-d H:i:s'),  
        //            ];
        //            DB::table('product')->insert($category); 
        // $category = [
        //     "name" => "Vivo",
        // ];
        //            DB::table('category')->insert($category); 
    }
}
