📘 Projet Gestion des Élèves – Afriq Formation
📌 Description
Ce projet est une application web développée avec Laravel et Blade pour la gestion des élèves d’une auto-école.
Il permet d’ajouter, modifier, supprimer et consulter les informations des élèves, ainsi que de gérer leurs formations.

🚀 Fonctionnalités principales
CRUD Élèves : création, édition, suppression et affichage des élèves.

Validation des formulaires avec messages d’erreur clairs (ex. : numéro de permis obligatoire).

Interface utilisateur responsive avec Bootstrap.

Relations Eloquent : gestion des liens entre élèves et formations (belongsToMany).

Messages de succès après chaque opération (ajout ou mise à jour).

🛠️ Technologies utilisées
Laravel 10+ (framework backend PHP)

Blade (moteur de templates Laravel)

Bootstrap 5 (interface responsive)

MySQL (base de données)

Cloner le projet :
git clone https://github.com/ton-compte/afriq-formation-eleves.git
cd afriq-formation-eleves

Installer les dépendances :
composer install
npm install && npm run dev


Configurer l’environnement :
DB_DATABASE=afriq_formation
DB_USERNAME=root
DB_PASSWORD=

Lancer les migrations :
php artisan migrate


Démarrer le serveur local :
php artisan serve

