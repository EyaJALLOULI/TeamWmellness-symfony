
🔎 Aperçu

TeamWellness est une application web développée avec Symfony, visant à améliorer le bien-être et l'engagement des collaborateurs au sein de l'entreprise. Elle centralise les activités, le suivi et la communication autour de la qualité de vie au travail.

Projet réalisé dans le cadre du cursus d'ingénierie informatique à ESPRIT, en collaboration avec Teamwill.

✨ Fonctionnalités
Module	Description
Authentification	Inscription, connexion et gestion des rôles (administrateur, employé)
Gestion des utilisateurs	Administration des profils collaborateurs
Activités bien-être	Création, consultation et inscription aux activités
Tableau de bord	Suivi des statistiques et de la participation
Multilingue	Interface disponible en plusieurs langues
🏗 Architecture
teamwellness/
├── bin/            # Exécutables (console Symfony)
├── config/         # Configuration de l'application
├── migrations/     # Migrations de la base de données
├── public/         # Point d'entrée web et ressources statiques
├── src/            # Code source (contrôleurs, entités, services)
├── templates/      # Vues Twig
├── tests/          # Tests unitaires et fonctionnels
├── translations/   # Fichiers de traduction
├── compose.yaml    # Configuration Docker
└── composer.json   # Dépendances PHP
