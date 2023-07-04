<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    // On appelle la methode about()
                    case 'about':
                        $this->about();
                        break;
                    // Charger le controlleur book
                    case 'home':
                        // Charger le controlleur home
                        $this->home();
                        break;
                    default:
                        // Erreur
                        throw new \Exception("Cette action n'existe pas : " . $_GET['action']);
                    // break;
                }
            } else {
                // Erreur
                throw new \Exception("Aucune action détectée.");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
    protected function about()
    {
        /* Appeler la methode about()
        On pourrait récupérer les données en faisant appel au modèle

        $params = [
            'test' => 'abc',
            'test2' => 'def'
        ];
        $this->render('page/about', $params);
        */

        // Ou bien par tableau assossiatif
        $this->render('page/about', [
            'test' => 'abc',
            'test2' => 'def',
        ]);
    }

    protected function home()
    {
        $this->render('page/home', [
        ]);
    }
}