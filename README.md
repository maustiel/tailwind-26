# La ludothèque des Tilleuls (tailwind-26)

Les exercices du chapitre Tailwind de 5XCOS. Le dépôt est un projet Laravel 13 (SQLite)
qui **fonctionne déjà** : une ludothèque prête des jeux de société à ses membres, et le
site affiche le catalogue, la fiche de chaque jeu, la liste des prêts et un formulaire
d'ajout. Les données de départ sont dans les seeders.

Ce qui manque, c'est la mise en forme. Les vues sont du HTML sans aucune classe, le
layout ne charge ni CSS ni JavaScript, et il n'existe aucun composant de présentation.
Tailwind 4 est déjà installé (`package.json`, `vite.config.js`, `resources/css/app.css`) :
vous l'activez, puis vous construisez l'interface exercice par exercice.

## Installer le projet

1. **Forkez** ce dépôt sur votre compte GitHub (bouton *Fork* en haut à droite).
2. **Clonez** votre fork :
   ```bash
   git clone https://github.com/VOTRE-COMPTE/tailwind-26.git
   cd tailwind-26
   ```
3. **Installez** les dépendances PHP et préparez le fichier `.env` :
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
4. **Créez la base et remplissez-la** :
   ```bash
   php artisan migrate --seed
   ```
   La commande vous propose de créer `database/database.sqlite` : répondez `yes`.
   Pour repartir des données d'origine à tout moment : `php artisan migrate:fresh --seed`.
5. **Installez** les dépendances JavaScript (Vite et Tailwind) :
   ```bash
   npm install
   ```

## Lancer le site

```bash
composer run dev
```

La commande lance en même temps le serveur PHP (`php artisan serve`) et Vite
(`npm run dev`), qui recompile le CSS à chaque modification d'une vue. Ouvrez
<http://127.0.0.1:8000>. Si vous utilisez Herd ou Laragon, l'adresse du site
(`http://tailwind-26.test`) fonctionne aussi, à condition que `composer run dev`
tourne pour Vite. Arrêtez tout avec `Ctrl+C`.

Tant que le layout ne charge pas le CSS avec `@vite`, Vite tourne pour rien : les pages
gardent le style par défaut du navigateur. C'est le point de départ du premier exercice.

## Les pages

| Adresse | Nom de la route | Ce qu'elle affiche |
|---|---|---|
| `/` | | redirige vers `/jeux` |
| `/jeux` | `games.index` | le catalogue : les douze jeux, avec leur couverture |
| `/jeux/{id}` | `games.show` | la fiche d'un jeu et l'historique de ses prêts |
| `/jeux/nouveau` | `games.create` | le formulaire d'ajout d'un jeu |
| `/jeux` (POST) | `games.store` | enregistre le jeu, puis redirige vers sa fiche |
| `/prets` | `loans.index` | tous les prêts, dans un tableau |
| `/composants` | `styleguide` | les boutons, statuts et cartes du site, dans toutes leurs variantes |

Le formulaire ne vérifie pas encore ce qu'il reçoit : la validation viendra dans un
chapitre suivant. Le message d'erreur sous le champ « Durée » est écrit en dur, pour
que vous puissiez lui donner son style.

## Ce qui est dans le dossier

| Fichier | Rôle |
|---|---|
| `app/Models/Game.php` | un jeu : titre, description, catégorie, nombre de joueurs, durée en minutes, couverture |
| `app/Models/Member.php` | un membre de la ludothèque : nom et adresse e-mail |
| `app/Models/Loan.php` | un prêt : le jeu, le membre et trois dates. La méthode `status()` renvoie `ongoing`, `overdue` ou `returned`, et `statusLabel()` le même statut en français |
| `app/Http/Controllers/GameController.php`, `LoanController.php` | les actions des pages |
| `database/seeders/` | douze jeux, huit membres, quinze prêts. Les dates des prêts partent du jour où vous lancez le seeder |
| `public/images/covers/` | une couverture SVG par jeu, et `default.svg` pour un jeu ajouté sans image |
| `resources/views/components/layouts/app.blade.php` | le layout : `<head>`, en-tête, menu, pied de page |
| `resources/views/games/`, `loans/`, `styleguide.blade.php` | les vues des pages, sans classe |
| `resources/css/app.css` | le point d'entrée de Tailwind |
| `resources/js/app.js` | le point d'entrée du JavaScript, vide pour l'instant |
| Tout le reste | le projet Laravel 13 tel que `laravel new` le crée |
