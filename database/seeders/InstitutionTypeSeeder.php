<?php

namespace Database\Seeders;

use App\Models\InstitutionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstitutionType::insert([
            [
                'name' => 'Primary School',
                'bn_name' => 'প্রাথমিক বিদ্যালয়',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'High School',
                'bn_name' => 'উচ্চ বিদ্যালয়',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'College',
                'bn_name' => 'কলেজ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'University',
                'bn_name' => 'বিশ্ববিদ্যালয়',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Madrasa',
                'bn_name' => 'মাদ্রাসা',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
