<?php
namespace App\Controller;

class ProjectsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('myLayout');

        $projects = [
            ['title' => 'Création d’un système anti-triche', 'url' => '/projects/anti-cheat'],
            ['title' => 'Détection de collision dans un moteur graphique (produit scalaire)', 'url' => '/projects/collision']
        ];

        $this->set('projects', $projects);
    }

    public function anticheat()
    {
        $this->viewBuilder()->setLayout('myLayout');
    }

    public function collision()
    {
        $this->viewBuilder()->setLayout('myLayout');
    }
}
