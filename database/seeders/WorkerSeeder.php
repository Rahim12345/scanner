<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workers = [
            [
                'position_id'=>'1',
                'name'=>'Rahim Süleymanov Camal',
                'token'=>str_slug('Rahim Süleymanov Camal'),
            ],
            [
                'position_id'=>'2',
                'name'=>'Cavid İsmayılov Elçin',
                'token'=>str_slug('Cavid İsmayılov Elçin'),
            ],
            [
                'position_id'=>'3',
                'name'=>'Hüseyn Ələkbərzadə Habil',
                'token'=>str_slug('Hüseyn Ələkbərzadə Habil'),
            ]
        ];

        foreach($workers as $worker)
        {
            Worker::create($worker);
        }
    }
}
