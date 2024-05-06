<?php

require '../core/Controller.php';

class HomeController extends Controller
{
    /**
     * fonction d'action par défaut du controlleur "home"
     */

    public function index()
    {
        $this->render('home/index.html.php', [
            'title' => 'bienvenue sur la page d\'Accueil'
        ]);
    }

    public function about()
    {
        $this->render('home/about.html.php', [
            'title' => 'A propos de nous'
        ]);
    }

    public function faq()
    {
        $this->render('home/faq.html.php', [
            'title' => 'FAQ'
        ]);
    }
}
