<?php

namespace Database\Seeders;

use App\Models\WebsitePolicy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policies = [
            [
                'privacy_policy' => 'Test Policy',
                'terms_conditions' => 'Test terms_conditions',
                'refund_policy' => 'Test refund_policy',
                'payment_policy' => 'Test payment_policy',
                'about_us' => 'Test About_us'
            ]
        ];

        WebsitePolicy::insert($policies);
    }
}
