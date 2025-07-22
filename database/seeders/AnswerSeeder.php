<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            $file = database_path('seeders/Answers.csv');

        if (!file_exists($file)) {
            echo "Seeding Answers...\n";
            return;
        }

        $data = array_map('str_getcsv', file($file));
        $header = array_map('trim', $data[0]);

        foreach (array_slice($data, 1) as $row) {
            $row = array_map('trim', $row);
            $row = array_combine($header, $row);

            DB::table('question_answers')->insert($row);
        }
    }
}
