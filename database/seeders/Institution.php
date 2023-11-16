<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class Institution extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://www.gokampus.com/api/gk/top-institutions');
        $jsonData = $response->json();

        $institutions = $jsonData['data'];
        $jsonFilePath = storage_path('database/institutions.json');
        file_put_contents($jsonFilePath, json_encode($institutions));

        foreach ($institutions as $institution) {
            Institution::create([
                'slug' => $institution['slug'],
                'name' => $institution['name'],
                'description' => $institution['description'],
                'logo' => $institution['logo'],
                'total_courses' => $institution['total_courses'],
                'total_learners' => $institution['total_learners'],
                'is_business' => $institution['is_business'],
            ]);
        }
    }
}
