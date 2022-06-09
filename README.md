# newswebsym6

## Configuration requise

- PHP 8.0.*
- MySQL (5.7 ou 8.* ) ou MariaDB (10.6.* )
- Composer
- Symfony.exe

## Installation

        symfony new newsweb --webapp


Charger `datas/newswebsym.sql` dans MariaDB ou MySQL (il faut désactiver les clef étrangères)

Ouvrir `.env` et l'enregistre sous le nom `.env.local`

puis modifiez la ligne :

        DATABASE_URL="mysql://root:@127.0.0.1:3307/newswebsym?serverVersion=10.6.5-MariaDB&charset=utf8mb3_unicode_ci"
        # DATABASE_URL="postgresql://symfony:ChangeMe@127.0.0.1:5432/app?serverVersion=13&charset=utf8"