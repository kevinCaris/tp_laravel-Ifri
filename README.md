## Objectif de l'application

Le but de ce projet est de développer une application de gestion de location de voitures à l'aide du langage PHP, du framework Laravel, et d'une base de données MySQL.

## Fonctionnalités

- Gestion des voitures du parc (création, modification, suppression, listing).
- Liste des individus ayant loué une voiture.
- Emprunt et retour de voitures par des individus. 
- Connexion obligatoire pour louer un véhicule.
- Consultation de la liste des véhicules possible en mode non connecté.
- Ajout, modification, et suppression de véhicules réservé aux profils administrateurs.


# Instructions 

- `copy .env.exemple to .env`
- `setup the new .env file`
- `composer update && npm install`
- run mysql database
- `php artisan migrate`
- `php artisan storage:link`
- `npm run build && php artisan serve`


If you want to run the project in dev mode use `npm run dev` instead of build in another terminal window. 

