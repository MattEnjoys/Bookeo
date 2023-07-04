<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                // On appelle la methode about()
                case 'about':
                    $this->about();
                    break;
                // Charger le controlleur book
                case 'home':
                    // Charger le controlleur home
                    var_dump('On appelle la methode home');
                    break;
                default:
                    // Erreur
                    break;
            }
        } else {
            // Charger la page d'accueil
        }
    }
    protected function about()
    {
        /* Appeler la methode about()
        On pourrait récupérer les données en faisant appel au modèle
        */
        $params = [
            'test' => 'abc',
            'test2' => 'def'
        ];

        $this->render('page/about', $params);
    }
}