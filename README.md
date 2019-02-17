# KarateClub

	1. Installation  
1.1 Installer WAMP (=> Windows), MAMP (=> Macos ou Windows) ou LAMP (=> linux)
(sur ma partition windows, j'ai mis MAMP car WAMP ne marchait pas)

1.2 Installer composer: https://getcomposer.org 

1.3 Mettre le dossier du site (KarateClub) sur le server local. 
Avec MAMP c'est dans C:...\MAMP\htdocs

	2. Lancer Symfony 
2.1 Lancer les services Apache et MySql de MAMP/LAMP/WAMP

2.2 Connexion à la DB MySQL : 
Modifier le mot de passe d'accès à la DB MySQL dans le fichier .env qui se trouve à la racine.

Dé-commenter ligne 27 et indiquer votrePassword : 
DATABASE_URL=mysql://root:votrePassword@127.0.0.1:3306/blog

Si vous avez MAMP, le mdp est : root. 

2.3  Lancer le service serveur de php :
Avec son éditeur de texte favori (Atom, notepad++ etc.), ouvrir le dossier KarateClub
Ouvrir aussi terminal et aller dans le dossier KarateClub (ou plus simplement : lancez le terminal depuis le projet de votre éditeur de texte (sur Atom, installer le package Terminal de votre choix))

Tapez :php bin/console server:run
Cela retourne l'url du site : http://127.0.0.1:8000

2.4 (A faire qu'une seule fois) Créer la table (=entity sur Symfony) : blog.
Ouvrir un autre terminal depuis le dossier KarateClub. 

Tapez : php bin/console doctrine:database:create
Nommer la table : blog  

2.5 Faire les migrations. 
Dans le terminal, 
Tapez : php bin/console make:migration
Cela créé un fichier "Version2019..." dans /src/Migrations. Il contient les requêtes SQL 
pour créer les tables dans votre DB local.

Tapez : php bin/console doctrine:migration:migrate
Le script est exécuté. => BD et structure des tables sont créés 

(En cas de problème : dans le dossier /src/Migrations, supprimer tous les fichiers "Version2019...." 
et répétez les 2 lignes précédentes dans le terminal)

2.6 Créer des données fictives aves Fixtures. 
Dans le terminal,
Tapez : composer require orm-fixtures --dev. (à faire la première fois seulement)

Tapez : php bin/console doctrine:fixtures:load
Cela exécute les codes qui se trouvent dans le dossier : /src/DataFixtures 
et ça remplit la DB avec des données à la con. 

2.7 Se connecter au site. 
Dans votre navigateur : http://127.0.0.1:8000

Et voilà !! 
