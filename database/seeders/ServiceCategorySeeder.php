<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_categories')->insert([
            [
                "name" => 'AC',
                "slug" => "ac",
                "image" => "1521969345.png"
            ],
            [
                "name" => 'Beauty',
                "slug" => "beauty",
                "image" => "1521969358.png"
            ],
            [
                "name" => 'Plumbing',
                "slug" => "plumbing",
                "image" => "1521969409.png"
            ],
            [
                "name" => 'Electrical',
                "slug" => "electrical",
                "image" => "1521969419.png"
            ],
            [
                "name" => 'Shower Filter',
                "slug" => "shower-filter",
                "image" => "1521969430.png"
            ],
            [
                "name" => 'Home cleaning',
                "slug" => "home-cleaning",
                "image" => "1521969446.png"
            ],
            [
                "name" => 'Carpentry',
                "slug" => "carpentry",
                "image" => "1521969454.png"
            ],
            [
                "name" => 'Pest control',
                "slug" => "pest-control",
                "image" => "1521969464.png"
            ],
            [
                "name" => 'Chimney',
                "slug" => "Chimney",
                "image" => "1521969490.png"
            ],

            [
                "name" => 'Computer repair',
                "slug" => "computer-repair",
                "image" => "1521969512.png"
            ],
            [
                "name" => 'Tv',
                "slug" => "tv",
                "image" => "1521969522.png"
            ],
            [
                "name" => 'Refregirator',
                "slug" => "refregirator",
                "image" => "1521969536.png"
            ],
            [
                "name" => 'Car',
                "slug" => "car",
                "image" => "1521969576.png"
            ],
            [
                "name" => 'Painting',
                "slug" => "painting",
                "image" => "1521972593.png"
            ],
        ]);
    }
}
