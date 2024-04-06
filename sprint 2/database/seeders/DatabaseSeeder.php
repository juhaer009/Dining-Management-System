<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Menu::create([
            'item' => 'Chicken Burger',
            'price' => 300
        ]);
        Menu::create([
            'item' => 'Beef Burger',
            'price' => 450
        ]);
        Menu::create([
            'item' => 'Potato fries',
            'price' => 160
        ]);
        Menu::create([
            'item' => 'Chicken & Pawn Sui Mai',
            'price' => 386
        ]);
        Menu::create([
            'item' => 'Beef & Mushroom dumpling',
            'price' => 392
        ]);
        Menu::create([
            'item' => 'Wonton on Chili Oil',
            'price' => 386
        ]);
        Menu::create([
            'item' => 'Fried cheese Wonton',
            'price' => 356
        ]);
        Menu::create([
            'item' => 'Fish cake',
            'price' => 404
        ]);
    }
}
