#Bonjour à tous!
# KarateClub

	1. Installation  
1.1 Installer WAMP (=> Windows), MAMP (=> Macos ou Windows) ou LAMP (=> linux)

1.2 Installer composer: https://getcomposer.org

1.3 Mettre le dossier du site (KarateClub) sur le server local.
Avec MAMP c'est dans C:...\MAMP\htdocs

1.4 Installation des bundles : 

Dans le terminal, tapez :
 
composer require vich/uploader-bundle

composer require friendsofsymfony/user-bundle "~2.0"

composer require dompdf/dompdf

composer require knplabs/knp-paginator-bundle


	2. Lancer Symfony
2.1 Lancer les services Apache et MySql de MAMP/LAMP/WAMP

2.2 Connexion à la DB MySQL :
Modifier le mot de passe d'accès à la DB MySQL dans le fichier .env qui se trouve à la racine.

Dé-commenter ligne 27 et indiquer votrePassword :
DATABASE_URL=mysql://root:votrePassword@127.0.0.1:3306/blog

Si vous avez MAMP, le mdp est : root.

2.3 (A faire qu'une seule fois) Créer la table (=entity sur Symfony) : blog.
Ouvrir un autre terminal depuis le dossier KarateClub.

Tapez : php bin/console doctrine:database:create
Nommer la table : blog  (ou le nom de votre choix, mais doit être le même que dans le fichier .env (ligne 27))

2.4 Faire les migrations.
Dans le terminal,
a. Tapez : php bin/console make:migration
Cela crée un fichier "Version2019..." dans /src/Migrations. Il contient les requêtes SQL pour créer les tables dans votre DB local.
(a priori, l'étape a. n'est pas à faire car le dossier migration contient déjà le script de création à partir d'une DB vierge.)

b. Tapez : php bin/console doctrine:migration:migrate
Le script est exécuté. => BD et structure des tables sont créés

(En cas de problème : dans le dossier /src/Migrations, supprimer tous les fichiers "Version2019...."
et répétez les étapes a. et b. dans le terminal)

2.5 Créer des données fictives aves Fixtures.
Dans le terminal,
Tapez : composer require orm-fixtures --dev. (à faire la première fois seulement)

Tapez : php bin/console doctrine:fixtures:load
Cela exécute les codes qui se trouvent dans le dossier : /src/DataFixtures
et cela remplit la DB avec des données aléatoires.

2.6  Lancer le service serveur de php :
Dans le terminal, tapez :php bin/console server:run
Cela retourne l'url du site : http://127.0.0.1:8000

2.7 Se connecter au site.
Dans votre navigateur : http://127.0.0.1:8000

Et voilà !!

Grâce aux Fixtures, des utilisateurs ont été créés. Vous pouvez voir le login (=adresse mail) de chaque utilisateur dans votre DB.
Un administrateur a également été créé : son login est admin@admin.com

Le mot de passe de tous les utilisateurs (y compris de l'admin) est : testtest 