<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class CompetenceProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::find(1);
        $project->competences()->attach(1);

        $project = Project::find(2);
        $project->competences()->attach([10, 6, 7, 8, 9]);

        $project = Project::find(3);
        $project->competences()->attach([3, 5, 4, 6, 7, 8, 9]);

        $project = Project::find(4);
        $project->competences()->attach([10, 11]);

        $project = Project::find(5);
        $project->competences()->attach([10, 12, 13, 14]);

        $project = Project::find(6);
        $project->competences()->attach([3, 6, 4, 5]);

        $project = Project::find(7);
        $project->competences()->attach([1, 2]);
    }
}
