# Portfolio — Mohamed Khalil Boutar

Portfolio personnel de Mohamed Khalil Boutar, Software Engineer (Laravel & Angular). Site multi-pages, bilingue (EN/FR), avec thème clair/sombre, construit avec Laravel, Tailwind CSS et Alpine.js.

## Stack technique

- **Backend** : Laravel 10 (PHP 8.1+)
- **Frontend** : Tailwind CSS 3 + Alpine.js (via Vite)
- **Icônes** : Bootstrap Icons
- **Base de données** : MySQL (stockage des messages du formulaire de contact)
- **Déploiement** : Vercel (runtime `vercel-php`)

## Fonctionnalités

- **Pages** : About (page d'accueil), Projects, Resume, Services, Contact, page 404 personnalisée.
- **Thème clair / sombre** : bouton de bascule dans le header, préférence mémorisée (`localStorage`), respecte la préférence système au premier chargement, sans flash au chargement.
- **Bilingue anglais / français** : URLs préfixées `/en/...` et `/fr/...`, sélecteur de langue qui conserve la page courante, contenu entièrement traduit (voir [Traductions](#traductions-i18n) ci-dessous).
- **Section Projets** : galerie filtrable (Tous / Web Apps / ERP & Business / API & Backend / Projets Personnels), avec lien GitHub direct sur les projets personnels.
- **Formulaire de contact** : soumission en AJAX, sauvegarde en base de données + email de notification, messages de succès/erreur localisés.
- **Animations** : apparition en cascade au scroll, barres de compétences et compteurs animés, effets de survol sur les cartes.
- **SEO** : meta description par page, Open Graph, Twitter Card, balises `hreflang` pour le référencement bilingue.




## Palette & design

Les couleurs sont centralisées dans `tailwind.config.js` :
- `accent` : vert sauge/forêt (couleur de marque)
- `surface` : gris charbon utilisé pour le mode sombre

Les composants réutilisables (`.btn-primary`, `.btn-secondary`, `.card`, `.section-tint`, `.hero-gradient`) sont définis dans `resources/css/app.css`.

## Traductions (i18n)

Le contenu anglais est écrit directement dans les fichiers Blade via `__('Texte en anglais')`. Les traductions françaises sont dans `lang/fr.json` (format `{"Texte anglais": "Texte français"}`).

**Pour ajouter ou corriger une traduction** : éditer `lang/fr.json` en gardant la clé anglaise identique au texte utilisé dans les vues.

**Pour ajouter une nouvelle langue** : ajouter le code de langue dans `routes/web.php` (`->where(['locale' => 'en|fr|xx'])`), dans `app/Providers/AppServiceProvider.php` (tableau des locales valides), et créer `lang/xx.json`.

## Installation locale

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build   # ou npm run dev pendant le développement
php artisan serve
```

Configurer dans `.env` :
- `DB_*` : connexion MySQL locale
- `MAIL_*` et `MAIL_ADMIN_ADDRESS` : pour recevoir les notifications du formulaire de contact

