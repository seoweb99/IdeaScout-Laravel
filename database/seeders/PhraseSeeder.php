<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // These are the same phrases as in your install.php
        $phrases = [
            ['phrase_en' => 'Can I take a photo', 'phrase_zh' => '我可以拍照吗'],
            ['phrase_en' => 'Can I have your business card', 'phrase_zh' => '可以给我一张名片吗'],
            ['phrase_en' => 'Can I have a sample', 'phrase_zh' => '可以给我一个样品吗'],
            ['phrase_en' => 'Can you deliver to my hotel', 'phrase_zh' => '你能送到我的酒店吗'],
            ['phrase_en' => 'I will come back later', 'phrase_zh' => '我待会儿回来']
        ];

        foreach ($phrases as $phrase) {
            DB::table('phrases')->insert($phrase);
        }
    }
}