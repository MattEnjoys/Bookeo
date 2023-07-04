<?php

namespace App\Controller;

class Controller
{
    public function route(): void
    {
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    // Charger le controlleur page
                    var_dump('On charge PageController');
                    break;
                // Charger le controlleur book
                case 'book':
                    // Charger le controlleur book
                    var_dump('On charge BookController');
                    break;
                default:
                    // Erreur
                    break;
            }
        } else {
            // Charger la page d'accueil
        }
    }
}