<!-- On appelle le template header  -->
<?php require_once _ROOTPATH_ . '\templates\header.php';
/* @var $book \App\Entity\Book */
?>

<h1>
    <?= $book->getTitle(); ?>
</h1>
<p>
    <?= $book->getDescription(); ?>
</p>

<!-- On appelle le template footer  -->
<?php require_once _ROOTPATH_ . '\templates\footer.php'; ?>