<?php

namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('myLayout');

        $intro = "Ce blog présente plusieurs projets techniques réalisés dans le cadre de mon apprentissage en informatique:";
        $this->set('intro', $intro);
    }
}
