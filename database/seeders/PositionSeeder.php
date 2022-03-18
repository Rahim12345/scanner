<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
          'backend',
          'frontend',
          'server',
          'müdir',
          'seo',
          'smm',
          'copywriter',
          'layihə rəhbəri',
          'dizayner',
          'dizayner(təcrübəçi)',
          'videoqraf',
          '3D motion',
          'reception',
        ];

        foreach($positions as $position)
        {
            Position::create([
                'name'=>$position
            ]);
        }
    }
}
