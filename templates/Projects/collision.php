<section class="page">
    <div class="image image-left">
        <?= $this->Html->image('collision.jpg') ?>
    </div>

    <div class="text">
        <h2>Détection de collision à l’aide du produit scalaire</h2>

        <p>
            Ce projet est né dans le cadre de mon grand oral de baccalauréat.
            L’objectif était de relever un défi précis : détecter des collisions
            dans un moteur graphique en se limitant volontairement à un seul outil
            mathématique, le produit scalaire.
        </p>

        <p>
            Le produit scalaire est un calcul mathématique entre deux vecteurs.
            Dans ce projet, les vecteurs utilisés sont les vecteurs vitesse
            de deux objets en mouvement.
        </p>

        <p>
            Le calcul est le suivant :
            <br>
            <strong>va • vb = produit scalaire</strong> (va et vb sont des vecteurs vitesse)
        </p>

        <p>
            L’interprétation du résultat permet de comprendre le mouvement des objets :
        </p>

        <ul>
            <li>
                Si le résultat est <strong>positif</strong>, les vecteurs vont globalement
                dans la même direction.
            </li>
            <li>
                Si le résultat est <strong>négatif</strong>, les vecteurs vont dans des
                directions opposées, ce qui indique un rapprochement potentiel.
            </li>
            <li>
                Si le résultat est <strong>nul</strong>, les vecteurs sont orthogonaux,
                c’est-à-dire perpendiculaires.
            </li>
        </ul>

        <p>
            Grâce à cette logique, il est possible de déterminer si deux objets
            se dirigent l’un vers l’autre et donc s’il existe un risque de collision,
            sans utiliser de moteur physique complexe.
        </p>

        <p>
            Ce projet m’a permis de mieux comprendre le lien entre les mathématiques
            et l’informatique graphique, tout en respectant une contrainte technique forte.
        </p>
    </div>
</section>

