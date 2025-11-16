# BLOG-AUTH

Mini projet PHP vanilla avec système d'authentification et blog simple.

---
## 🔧 Stack
- PHP (sans framework)
- MySQL
- HTML/CSS
- Sessions PHP
- Fichier `.env` pour la config

---
## 📁 Structure
````markdown
MINI-AUTH-TEST/ 
├── index.php # Page d'accueil (protégée par session) 
├── .env # Variables sensibles (DB) 
├── .gitignore # Ignore .env et fichiers temporaires 
│ 
├── auth/ # Module d'authentification 
    │ 
    ├── login.php 
    │ 
    ├── signup.php 
    │ 
    └── logout.php 
│ 
├── config/ # Configuration backend 
    │ 
    ├── db.php # Connexion MySQL 
    │ 
    └── env.php # Chargeur .env maison 
│ 
├── assets/ # Favicon, CSS, images 
    │ 
    └── favicon.ico
````
---
## ⚙️ Installation

1. Créer une base `auth_db` avec une table `users(username, password)`
2. Remplir `.env` :
````markdown
DB_HOST=localhost
DB_USER=VotreUser #par défaut root
DB_PASS=VotreMdp   
DB_NAME=auth_db
````
---
3. Lancer `index.php` via serveur local (XAMPP, WAMPP, etc.)

## ✅ Fonctionnalités

- Connexion / Inscription
- Session utilisateur
- Redirection vers index après login
- Déconnexion
- Structure prête pour ajout de blog et dashboard

---
## 📄 Licence

Projet libre pour usage personnel ou éducatif.
