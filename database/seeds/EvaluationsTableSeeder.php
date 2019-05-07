<?php

use Illuminate\Database\Seeder;
use App\Evaluation;

class EvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=15; $i++){
            $evaluation = new Evaluation;
            $evaluation->evaluation = $i;
            $evaluation->save();
    }
    }
        
}
