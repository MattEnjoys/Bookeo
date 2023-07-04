<?php

namespace App\Controller;

class Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['controller'])) {
                switch ($_GET['controller']) {
                    case 'page':
                        // Charger le controlleur page
                        $pageController = new PageController();
                        $pageController->route();
                        break;
                    case 'book':
                        // Charger le controlleur book
                        $pageController = new BookController();
                        $pageController->route();
                        break;
                    default:
                        // Erreur
                        throw new \Exception("Le controleur n'existe pas");
                    // break;
                }
            } else {
                // Chargement de la page d'accueil si pas de controleur dans l'URL
                $pageController = new PageController();
                $pageController->home();
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
    protected function render(string $path, array $params = []): void
    {
        $filePath = _ROOTPATH_ . '/templates/' . $path . '.php';

        try {
            if (!file_exists($filePath)) {
                //  Générer un erreur
                throw new \Exception("Fichier non trouvé : " . $filePath);
            } else {
                // Etrait chaque ligne du tableau et crée des variables pour chacune
                extract($params);
                require_once $filePath;
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
}