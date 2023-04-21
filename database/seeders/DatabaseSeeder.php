<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Entry;
use App\Models\Topic;
use App\Models\Job;
use App\Models\Skill;
use App\Models\Link;
use App\Models\Study;



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Entry::truncate();
        Topic::truncate();
        Job::truncate();
        Skill::truncate();
        Link::truncate();
        Study::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Topic::factory()->count(4)->create();
        Skill::factory()->count(4)->create();
        Project::factory()->count(4)->create();
            
        Entry::factory()->count(4)->create();
        Job::factory()->count(4)->create();
        Link::factory()->count(4)->create();
        Study::factory()->count(4)->create();
    }
}
