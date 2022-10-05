<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\otherImages;
use App\Models\stickers;
use App\Models\User;
use App\Models\comment;
use App\Models\personalInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'name'=>'Customer',
            'email'=>'customer@customer.com',
            'password'=>Hash::make('password'),
            'profile_photo_path'=>'/images/Artist.png'
        ]);
        User::factory(50)->has(stickers::factory()->has(otherImages::factory(3),'otherImages'),'sticker')->has(comment::factory(3),'comment')->has(personalInformation::factory(),'personal')->create();
    }
}
