# Création d’un mini site gestion de bd/manga/livre :

Site déployé sur alwaysdata.net: [Bookeo]("lien du site une fois deployé").
Projet gité sur [le git d'Anthony Laplane](https://github.com/arirangz/bookeo).

## BOOKEO :

## Live 1 :

> Mise en place de la page index.php avec [Bootstrap](https://getbootstrap.com/).
> On crée header.php et footer.php où l'on découpe le code de index.php pour l'externaliser.
> On crée le home.php pour y mettre le contenu restant de index.php. Ce fichier se retrouve avec juste l'inclusion de header et footer.

## Live 2 :

> Live théorique sur la POO.

## Live 3 :

> Création du dossier App dans lequel on mettra les dossiers Entity, Controller et Repository et dedans les fichers associés.

## Live 4 :

> On crée le premier controller, PageController.php.
> On réorganise les fichiers en regroupant les templates.
> On appelle les rendus dans Controller.php et PageController.php.

## Live 5 :

> On met un try catch dans le Controller.php pour la public function route.
> Réalisation d'un template d'erreurs default.php dans un dossier errors.
> Si on a pas géré de controller, on veux afficher la page d'accueil "le comportement par defaut depuis index.php"
> On met un try catch dans le PageController.php pour la public function route.
> On s'attaque a l'entité Book.php en déclarant les setters et les getters. Puis on fais le controller BookController.php et enfin le rendu show.php dans le dossier book.
> On crée BookRepository.php pour récupérer des infos.
> On modifie le rendu show.php en conséquence.
