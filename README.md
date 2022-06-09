# newswebsym6

## Configuration requise

- PHP 8.0.*
- MySQL (5.7 ou 8.* ) ou MariaDB (10.6.* )
- Composer
- Symfony.exe ( https://symfony.com/download ) 
- npm et node.js

## Installation

        symfony new newsweb --webapp
        OU
        composer create-project symfony/website-skeleton newsweb
        puis
        cd newsweb


Charger `datas/newswebsym.sql` dans MariaDB ou MySQL (il faut désactiver les clef étrangères)

Ouvrir `.env` et l'enregistre sous le nom `.env.local`

puis modifiez la ligne (le # commente les lignes) :

        DATABASE_URL="mysql://root:@127.0.0.1:3307/newswebsym?charset=utf8"
        # DATABASE_URL="postgresql://symfony:ChangeMe@127.0.0.1:5432/app?serverVersion=13&charset=utf8"

## Démarage

Installez le certificat SSL (https)

        symfony server:ca:install

Lancement du serveur avec

        symfony serve -d

Allez voir le site à cette adresse :

https://127.0.0.1:8000

## Les outils

Pour voir tous les outils utilisables depuis la console:

        php bin/console

### Mapping des tables de votre DB

dans la console :

        php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity

Vous trouverez dans le dossier `src/Entity` tous les mappings de vos tables !

Pour rajouter les getters et les setters :

        php bin/console make:entity --regenerate

### Installez une administration

Installation de EasyAdmin :

https://symfony.com/doc/current/the-fast-track/fr/9-backend.html#configurer-easyadmin

dans la console :

        symfony composer req "admin:^4"

Puis installez le dashboard :

        symfony console make:admin:dashboard

Et acceptez les paramètres par défaut

Vous pouvez voir l'admin à cette adresse :

https://127.0.0.1:8000/admin

### installez npm et node

        npm updtae
        npm install

puis créez un build

        npm run build
### Créez un CRUD dans cette admin

Dans la console :

        symfony console make:admin:crud

Et choisissez la table thearticle