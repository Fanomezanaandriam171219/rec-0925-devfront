# README test technique — Dev Front: Fanomezana

##Instructions lancement du build:
recopier env.example et renommer la deuxième copie en .env
Entrer dans le dossier racine du projet et lancer la commande:  - composer install et npm install
Après avoir installé les dépendances il faut générer la clé laravel: - php artisan key:generate
si le build ne trouve pas automatiquement effacer le cache et faire un rebuild du cache:
  - php artisan config:clear
  - php artisan config:cache

##Routes
Page 1: http://127.0.0.1:8000/randriamihajarison-completez-votre-reservation
Page 2 : http://127.0.0.1:8000/randriamihajarison-paiement

##Notes de design:
la hauteur du card dans la page 1 manquait un peut d'espace donc je me suis permis d'ajouter un peu de height.
La couleur texte gris sur du fond gris n'est pas conforme aux règles de l'accessibilité numérique.
j'ai décidé de faire un fallback des polices vers la version par défaut de tailwind pour des raisons de dépendances.

## Temps passé au total:
10 heures