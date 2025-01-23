<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $languages = [
            ['code' => 'CA'],
            ['code' => 'ES'],
            ['code' => 'EN'],
            ['code' => 'PT'],
            ['code' => 'IT'],
            ['code' => 'EU']
        ];

        foreach ($languages as $language) {
            Language::updateOrCreate(['code' => $language['code']], $language);
        }
    }
}
