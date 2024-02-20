<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'CSS',
                'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/CSS3_logo.svg',
                ],
            [
                    'name' => 'VueJs',
                    'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg',
                ],
            [
                'name' => 'BOOTSTRAP',
                'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg',
                    ],
            [
                'name' => 'JS',
                'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg',
                ],
            [
                'name' => 'PHP',
                'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg',
                ],
            [
                'name' => 'HTML',
                'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg',
            ],
                        
        ];

        foreach ($technologies as $technology) {

            Technology::create($technology);

        }
    }
}
