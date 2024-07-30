<?php

namespace Database\Seeders;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'id' => '1',
            'name' =>'Hammer Drill',
            'price' => '300000',
            'image' => 'Hammerdrill.png'
        ]);
        Product::create([
            'id' => '2',
            'name' =>'HandTool',
            'price' => '250000',
            'image' => 'handtool.png'
        ]);
        Product::create([
            'id' => '3',
            'name' =>'Kunci Inggris',
            'price' => '50000',
            'image' => 'kunciinggris.png'
        ]);
        Product::create([
            'id' => '4',
            'name' =>'ToolBox',
            'price' => '150000',
            'image' => 'toolbox.png'
        ]);
    }
}
