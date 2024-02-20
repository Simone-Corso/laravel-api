<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Full-Stack',
            'Back-End',
            'Front-End',
        ];

        foreach ($types as $oneType){
            $existingType = Type::where('name', $oneType)->first();

            //in questo caso se non esiste lo crea nuovo
            if (!$existingType) {
                $type = new Type();
                $type->name = $oneType;
                $type->save();
    }
        }
    }

}