<div align="center">

# 🌿 TeamWellness

**Application web dédiée au bien-être des collaborateurs en entreprise.**

![Symfony](https://img.shields.io/badge/Symfony-000000?style=for-the-badge&logo=symfony&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)

</div>

---

## 🔎 Aperçu

**TeamWellness** est une application web développée avec Symfony, visant à améliorer le bien-être et l'engagement des collaborateurs au sein de l'entreprise. Elle centralise les activités, le suivi et la communication autour de la qualité de vie au travail.


---

## ✨ Fonctionnalités

- **Authentification** : inscription, connexion et gestion des rôles (administrateur, employé)
- **Gestion des utilisateurs** : administration des profils collaborateurs
- **Activités bien-être** : création, consultation et inscription aux activités
- **Tableau de bord** : suivi des statistiques et de la participation
- **Multilingue** : interface disponible en plusieurs langues

---

## 🏗 Architecture

```
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
```

---

## 🛠 Technologies

- **Backend** : PHP, Symfony
- **Frontend** : Twig, HTML5, CSS3, JavaScript
- **Base de données** : MySQL, Doctrine ORM
- **Tests** : PHPUnit
- **Conteneurisation** : Docker

---

## ⚙ Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony CLI
- MySQL
- Git

---

## 🚀 Installation

**1. Cloner le dépôt**

```bash
git clone https://github.com/EyaJALLOULI/teamWellness-symfony.git
cd teamWellness-symfony
```

**2. Installer les dépendances**

```bash
composer install
```

**3. Créer la base de données**

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

**4. Lancer le serveur**

```bash
symfony server:start
```

L'application est accessible sur `http://localhost:8000`.

---

## 🔐 Configuration

Créer un fichier `.env.local` à la racine du projet :

```env
APP_ENV=dev
APP_SECRET=votre_cle_secrete
DATABASE_URL="mysql://utilisateur:motdepasse@127.0.0.1:3306/teamwellness"
```

> ⚠️ Le fichier `.env.local` ne doit jamais être publié sur GitHub.

---

## 🧪 Tests

```bash
php bin/phpunit
```

---

## 👥 Équipe

- **Eya Jallouli** : Développeuse

---

<div align="center">

Réalisé avec ❤️ à **ESPRIT**

</div>
