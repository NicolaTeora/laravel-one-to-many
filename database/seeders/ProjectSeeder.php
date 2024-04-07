<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects_data = [
            [
                'title' => 'Boolando',
                'description' => 'replica sito di e-commerce',
                'type' => 'Frontend',
                'category' => 'Html'
            ],
            [
                'title' => 'Boolflix',
                'description' => 'replica sito di film/serie streaming',
                'type' => 'Full-stack',
                'category' => 'Vue'
            ]
        ];

        foreach ($projects_data as $project_data) {
            $project = new Project;
            $project->title = $project_data['title'];
            $project->description = $project_data['description'];
            $project->type = $project_data['type'];
            $project->category = $project_data['category'];
            $project->save();
        }
    }
}
