1.PREREQUIS

A) Installation d’un serveur local et d’une base de données : 
- Apache (version : 2.4)
- MySQL (version : 8.10)
- Php (version : 7.1)

Les environnements suivants peuvent être employés :
- WAMP (=> Windows), 
- MAMP (=> Macos ou Windows) 
- LAMP (=> linux)

B) Installation de composer pour faciliter le déploiement des bundles de l’étape 1.3 : https://getcomposer.org


2. BASE DE DONNEES

A) Importez le dossier du projet en local : projet Symfony (version : 4.2) disponible à l’adresse : https://github.com/NP084/KarateClub

B) Importez sur votre serveur local la base de données DB4Tests qui se trouve dans le dossier racine du projet.
La table qui a été importée contient déjà une série d’utilisateurs et un administrateur. 

C) Renommez le fichier .env2dwld en .env

D) Adapter le fichier .env pour la connexion à la base de données :

E) Dé-commentez la ligne 27 et indiquez le nom d’utilisateur (root), le mode de passe de votre base de données, ainsi que le nom de la table (blog) :
DATABASE_URL=mysql://root:yourPassword@127.0.0.1:3306/blog


3. LANCEMENT DE SYMFONY

A) Lancer les services Apache et MySql de MAMP/LAMP/WAMP

B) Installation des bundles (à ne faire qu’une seule fois) :
Dans le terminal, se rendre dans le dossier du projet qui a été téléchargé au point 1.1, et installer les différents bundles via les lignes de commandes suivantes : 
- composer require vich/uploader-bundle
- composer require friendsofsymfony/user-bundle "~2.0"
- composer require dompdf/dompdf
- composer require knplabs/knp-paginator-bundle

C) Lancement du service serveur de php :
Dans le terminal, tapez : php bin/console server:run
Cela retourne l'URL du site : http://127.0.0.1:8000

Pour se connecter avec l’un des profils contenus dans la base de données : 
- nom d’utilisateur = adresse mail
- mot de passe : testtest
