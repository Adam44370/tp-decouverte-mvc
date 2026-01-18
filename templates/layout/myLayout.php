<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blog de projets - Adam Zaamoun</title>
    <?= $this->Html->css('style') ?>
</head>
<body>

<header>
    <h1>Blog de projets – Adam Zaamoun</h1>
    <nav>
        <?= $this->Html->link('Accueil', '/') ?>
        <?= $this->Html->link('Projets', '/projects') ?>
    </nav>
</header>

<main class="main">
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</main>

<footer>
    <p>TP Découverte MVC – CakePHP</p>
</footer>

</body>
</html>

