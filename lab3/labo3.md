# Laboratoire 3

Prénom :

Nom : 

Numéro d'étudiant :

Url du site :

Résultat : / 10

Commentaire :

## Objectif

Utiliser le language PHP pour lire des données en BD.
Au niveau fonctionnel, la laboratoire consiste en la création d'une page de login, d'une page de logout, d'une liste de produits et d'une page de détail de produit.

## Étapes

1. Copier les fichiers du répertoire lab3 sur votre ordinateur
2. Utiliser le fichier tables.sql pour créer les tables lab3_products et lab3_users
2. Compléter les fichiers php
3. Soumettez tous les fichiers du répertoire lab3 via Léa
4. (bonus) Téléverser les fichiers sur votre site personnel
5. (bonus) Caractérisques des produits
    - Utiliser le fichier tables.sql pour créer la table lab3_product_features
    - Améliorer la fonction findProductById pour retourner également les caractérisques des produits. 
    - Utiliser le bloc commenté dans product.php pour afficher les caractéristiques des produits.

## Exigences

1. Le comportement de référence est http://cours-php.atwebpages.com/projets/lab3a/login.php
2. La page de login doit permettre de se logger. 
3. Une session est ouverte après un login avec succès, les informations de l'usager en session sont stockées en session.
4. La session est fermée après une déconnexion (logout), les informations de l'usager sont effacées.
5. Le catalogue de produit (store.php) affiche la liste des produits disponibles.
6. La page de détail de produit (product.php) affiche le détail d'un produit.