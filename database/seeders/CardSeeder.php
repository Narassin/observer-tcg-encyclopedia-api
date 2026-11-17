<?php

namespace Database\Seeders;

use App\Imports\CardImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = 'seeders\data\cardlist_171126.xlsx';
        $file = database_path($filePath);

        if (!file_exists($file)) {
            $this->command->error("Xlsx file not found at: {$file}");
            return;
        }

        $import = new CardImport();
        Excel::import($import, $file);

        $this->command->info('Cards imported successfully.');
    }
}
