<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
     // Path to the JSON file
        $jsonFilePath = database_path('json\data.json');
        
        // Read and decode JSON data
        $jsonData = File::get($jsonFilePath);
        $students = json_decode($jsonData, true);

        // Insert data into the database
        DB::table('students')->insert($students);
    
    }
}
