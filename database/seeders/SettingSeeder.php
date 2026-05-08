<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
            [
                'phone' => '017********',
                'email' => 'info@ecommerce.com',
                'address' => 'Savar, Dahaka-1219',
                'facebook' => 'http://facebook.com/',
                'twitter' => 'http://facebook.com/',
                'instagram' => 'http://facebook.com/',
                'youtube' => 'http://facebook.com/',
                'logo' => 'http://facebook.com/',
                'hero_image' => 'http://facebook.com/',
            ],
        ];

        Setting::insert($setting);
    }
}
