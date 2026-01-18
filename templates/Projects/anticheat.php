<section class="page">
    <div class="text">
        <h2>Création d’un système anti-triche</h2>

        <p>
            Ce projet avait pour objectif principal de me familiariser avec le
            langage C#, tout en travaillant sur un cas concret issu du jeu vidéo :
            la détection de comportements anormaux chez les joueurs.
        </p>

        <p>
            Le système anti-triche repose sur l’analyse du comportement du joueur
            afin de repérer des actions impossibles ou très improbables dans des
            conditions normales de jeu.
        </p>

        <h3>Détection d’une vitesse anormale</h3>

        <p>
            Pour détecter une vitesse trop élevée, le principe est simple :
            on commence par définir les vitesses normalement atteignables par un joueur
            selon différentes situations, comme la marche, la course, la glissade
            ou encore les améliorations temporaires de vitesse.
        </p>

        <p>
            Ensuite, la vitesse actuelle du joueur est analysée en temps réel.
            Si cette vitesse dépasse les valeurs maximales prévues,
            alors une anomalie est détectée, ce qui peut indiquer une triche.
        </p>

        <h3>Détection du noclip</h3>

        <p>
            Le noclip correspond à la capacité de traverser des murs ou des objets
            qui devraient normalement bloquer le joueur.
        </p>

        <p>
            Pour détecter ce comportement, le système se base sur une tolérance
            de collision définie à l’avance.
            Si un joueur possède une tolérance plus élevée que celle autorisée,
            cela signifie qu’il peut traverser des obstacles,
            ce qui est un comportement suspect.
        </p>

        <p>
            Ce projet m’a permis de mieux comprendre les problématiques liées
            à la sécurité dans les jeux vidéo, tout en renforçant mes compétences
            en programmation et en analyse de données.
        </p>
    </div>

    <div class="image image-right">
        <?= $this->Html->image('anticheat.jpg') ?>
    </div>
</section>
