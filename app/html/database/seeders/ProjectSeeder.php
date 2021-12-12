<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('projects')->insert([
            [
                'title' => 'Chalets et Caviar',
                'image' => 'chaletsetcaviar.png',
                'description' => 'Site d\'une agence immobilière de prestige à Courchevel',
                'url_site' => 'https://projet2.fleurdeveley.fr/',
                'url_github' => '',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'title' => 'SnowTricks',
                'image' => 'snowtricks.png',
                'description' => 'Site communautaire de snowboard',
                'url_site' => 'https://projet6.fleurdeveley.fr/',
                'url_github' => 'https://github.com/fleurdeveley/OC_P6_SnowTricks',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'title' => 'Blog',
                'image' => 'blog.png',
                'description' => 'Blog',
                'url_site' => 'https://projet5.fleurdeveley.fr/',
                'url_github' => 'https://github.com/fleurdeveley/OC_P5_Blog',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'title' => 'BileMo',
                'image' => 'api.png',
                'description' => 'Création d\'un service web exposant une API mettant à disposition un catalogue de smartphones, pour du B2B.',
                'url_site' => '',
                'url_github' => 'https://github.com/fleurdeveley/OC_P7_BileMo',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'title' => 'ToDoList',
                'image' => 'todolist.png',
                'description' => 'Amélioration d\’une application existante sur la gestion d’une ToDoList. Réalisation de tests unitaires et fonctionnels. Amélioration de la qualité du code et des performances.',
                'url_site' => '',
                'url_github' => 'https://github.com/fleurdeveley/OC_P8_ToDo-Co',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'title' => 'Combis & Roads',
                'image' => 'combis&road.png',
                'description' => 'Plugin wordpress jeux de dés "La Combinaison Gagnante"',
                'url_site' => 'https://combis.fleurdeveley.fr/',
                'url_github' => 'https://github.com/fleurdeveley/combi-co',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'title' => 'La Combinaison Gagnante',
                'image' => 'des.png',
                'description' => 'Amélioration d\’une application existante sur la gestion d’une ToDoList. Réalisation de tests unitaires et fonctionnels. Amélioration de la qualité du code et des performances.',
                'url_site' => 'https://wordpress-des.fleurdeveley.fr/',
                'url_github' => 'https://github.com/fleurdeveley/jet_des',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
        ]);
    }
}
