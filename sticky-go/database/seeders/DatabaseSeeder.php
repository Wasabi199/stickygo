<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\otherImages;
use App\Models\stickers;
use App\Models\User;
use App\Models\comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    stickers::factory(50)->has(otherImages::factory(3),'otherImages')->create();
        User::factory(50)->has(stickers::factory()->has(otherImages::factory(3),'otherImages'),'sticker')->has(comment::factory(3),'comment')->create();
    }
}
