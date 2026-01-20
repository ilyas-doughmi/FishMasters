# FishMasters - Plateforme de Gestion de Compétitions de Pêche

## Présentation du Projet
FishMasters est une application web conçue pour la Fédération Marocaine de Pêche Sportive. Elle permet de digitaliser l'organisation des événements de pêche, offrant aux passionnés un suivi en direct des compétitions, aux pêcheurs un outil de déclaration de prises, et aux organisateurs un système robuste de gestion des classements.

---

## Fonctionnalités Clés

### Visiteurs & Fans
- Calendrier Live : Visualisation des compétitions à venir (Mer, Lacs, Barrages).
- Statistiques Pêcheurs : Consultation des profils et performances individuelles.
- Classements Dynamiques : Ranking général du championnat et par catégorie.
- Engagement : Système de likes sur les prises et badges de fidélité.
- Notifications : Abonnement aux alertes pour les records battus.

### Pêcheurs Sportifs
- Profil Personnalisé : Gestion du club, région et techniques favorites.
- Déclaration de Prises : Enregistrement avec photo, poids/taille et mode "Catch & Release".
- Dashboard Performance : Analyse détaillée (Plus grosse prise, points cumulés).

### Organisateurs (Administration)
- Gestion d'Événements : Création de compétitions avec règles de scoring spécifiques.
- Validation Moderée : Vérification des preuves photos des prises déclarées.
- Modération : Contrôle des commentaires et contenus communautaires.
- Automatisation : Calcul automatique des scores et gestion des égalités.

---

## Logique de Scoring & Classement
1. Calcul des Points : Basé sur le poids (1g = 1pt) ou la taille (1cm = 1pt), avec application possible de coefficients par espèce rare.
2. Gestion des Égalités : 
   - 1er critère : La plus grosse prise.
   - 2ème critère : Nombre total de poissons capturés.
3. Hiérarchie : Publication automatique des podiums par manche et au classement général national.

---

## Stack Technique
- Backend : PHP 8.x (Architecture MVC native)
- Base de données : PostgreSQL / MySQL avec PDO pour la sécurité.
- Frontend : JavaScript (ES6+), Fetch API / AJAX pour le dynamisme.
- Design : Tailwind CSS & Font Awesome (Interface premium & responsive).
- Sécurité : Protection XSS, CSRF, et Injection SQL via requêtes préparées.

---

## Structure du Projet
```text
FishMasters/
├── app/
│   ├── controllers/   # Logique applicative
│   ├── models/        # Intéractions BDD
│   └── views/         # Interfaces (Fisher, Admin, Auth, Home)
├── public/            # Assets (CSS, JS, Images)
├── database/          # Scripts SQL & Migrations
├── config/            # Configuration système
└── index.php          # Point d'entrée unique (Routing)
```

---

## Installation & Lancement
1. Cloner le repository.
2. Configurer le serveur local (XAMPP/WAMP/Laragon).
3. Importer le script `database/data.sql` dans votre gestionnaire de base de données.
4. Ajuster les paramètres de connexion dans `config/config.php`.
5. Accéder au projet via `http://localhost/FishMasters`.
