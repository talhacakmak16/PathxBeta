<?php

namespace Database\Seeders;
use App\Helper\imageUpload;
use Database\Factories;
use App\Helper\mHelper;
use App\Models\TeamJerseys;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class TeamJerseySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TeamJerseys::factory(10)->create();
        $name = array
        (
            'Deplasman Forma',
            'İç Saha Forma',
            'Yeni Sezon Forma',
            'Hatıra Forma',
            'Çizgili Forma',
            'Çubuklu Forma',
        );
        $images = TeamJerseys::query()->first();
        $datanumber = 1;
        for ($i = 0; $i<$datanumber; $i++)
        {

            $Jerseys = new TeamJerseys;
            $self = $Jerseys->name = $name[rand(0,4)];
            $Jerseys->teamid = rand(0,3);
            $Jerseys->brandid = rand(0,3);
            $Jerseys->image = $images['image'];
            $Jerseys->categoryid = rand(0,2);
            $Jerseys->price = rand(100,500);
            $Jerseys->selflink = mHelper::permalink($self);
            $Jerseys->created_at = now();
            $Jerseys->updated_at = now();



            $Jerseys->save();
        }

    }
}
