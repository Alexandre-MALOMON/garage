Bonjour les amis le projet est déjà sur github

requirement du projet
PHP 7.4
COMPOSER 2.3.0
NODE 17.9.0
GIT 2.25.1

Lien du clonage
HTTPS https://github.com/Alexandre-MALOMON/garage.git
SSH git@github.com:Alexandre-MALOMON/garage.git

Vous devez avoir git installé sur votre PC et configurer
Pour cloner allez sur le terminal et fait

*git clone <le lien https ou le lien ssh pour ceux qui ont configurer le le git avec une clé SSH>
*faire un cd le dossier du projet
*faire un composer install
*ouvrir le projet sur l'editeur et créer un fichier .env
*copier le contenu du fichier .env.exemple et coller dans le nouveau fichier .env
*faire un php artisan key:generate
*créer une base de donnée et mettre le nom de la base de donnée dans la variable d'Environment "DB_DATABASE" du fichier .env
*faire un php artisan optimize
*faire un php artisan migrate
*faire un php artisan serve pour lancer le serveur


HAPPY CODING
