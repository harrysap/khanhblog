<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactReason;

class ContactReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $topics = [
            'Tư vấn lộ trình học SAP',
            'Tư vấn triển khai SAP',
            'Hỗ trợ vận hành SAP',
            'Khác'
        ];

        foreach ($topics as $topic) {
            ContactReason::create(['name' => $topic]);
        }
    }
}
