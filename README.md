------------  
# Pré-requis :  
  
PHP ^7.2.5  
Symfony CLI 4.*  
Composer 1.6.*  
mySQL 5.7  
  
------------  
# Installation :  
  
1. Cloner le dépôt git symfonytest :  
`git clone https://github.com/DesirThomas/sf_perso.git`  
  
2. Se positionner sur le dossier du projet :  
`cd sf_perso`  
  
3. Copier le fichier ".env", coller-le et renommer le ".env.local". Configurer-le. (ligne 32)  
    
4. Installer les bundles associés au projet :  
`composer install`  
  
5. Créer votre base de donnée avec symfony :  
`php bin/console doctrine:database:create`  
  
6. Importer les migrations :  
`php bin/console doctrine:migration:migrate`  
  
7. Importer les fixtures :  
`php bin/console doctrine:fixtures:load`  
  
8. Lancer le serveur symfony :  
`symfony server:start`  
  
------------  