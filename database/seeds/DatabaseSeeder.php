<?php

use App\DetectionInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetectionInfo::truncate();

        $detectionInfoQuantity=30;
        factory(DetectionInfo::class,$detectionInfoQuantity)->create();
    }
}
