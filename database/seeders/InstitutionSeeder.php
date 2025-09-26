<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::insert([
            [
                'upazila_id' => 455, // demo upazila_id
                'institution_type_id' => 1,
                'name' => 'Orakandi Government Primary School',
                'bn_name' => 'ওড়াকান্দি সরকারি প্রাথমিক বিদ্যালয়',
                'eiin' => '100001',
                'address' => 'Orakandi, Kashiani, Gopalganj',
                'lat' => '23.4567',
                'lon' => '89.4567',
                'established_year' => 1975,
                'website' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'upazila_id' => 455,
                'institution_type_id' => 2, // High School
                'name' => 'Orakandi High School',
                'bn_name' => 'ওড়াকান্দি উচ্চ বিদ্যালয়',
                'eiin' => '100002',
                'address' => 'Orakandi, Kashiani, Gopalganj',
                'lat' => '23.4570',
                'lon' => '89.4570',
                'established_year' => 1965,
                'website' => 'http://orakandihigh.edu.bd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'upazila_id' => 455,
                'institution_type_id' => 3, // College
                'name' => 'Kashiani College',
                'bn_name' => 'কাশিয়ানী কলেজ',
                'eiin' => '100003',
                'address' => 'Kashiani, Gopalganj',
                'lat' => '23.4600',
                'lon' => '89.4600',
                'established_year' => 1980,
                'website' => 'http://kashianicollege.edu.bd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'upazila_id' => 455,
                'institution_type_id' => 4, // University
                'name' => 'Gopalganj University',
                'bn_name' => 'গোপালগঞ্জ বিশ্ববিদ্যালয়',
                'eiin' => null,
                'address' => 'Gopalganj Sadar, Gopalganj',
                'lat' => '23.4800',
                'lon' => '89.4800',
                'established_year' => 2005,
                'website' => 'http://gopalganjuniversity.ac.bd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
