<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            Book::create([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(1),
            ]);
        }
    }
}
