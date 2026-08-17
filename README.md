# Portfolio — Mohamed Khalil Boutar

Portfolio personnel de Mohamed Khalil Boutar, Software Engineer (Laravel & Angular). Site multi-pages, bilingue (EN/FR), avec thème clair/sombre. Site 100% statique (HTML/CSS/JS), pensé pour un déploiement direct sur Netlify.

## Stack technique

- **HTML/CSS/JS** statique, sans étape de build
- **CSS** : écrit à la main dans `assets/css/style.css` (design system porté depuis l'ancienne config Tailwind)
- **Interactivité** : Alpine.js (+ plugin `@alpinejs/intersect`), chargés via CDN
- **Icônes** : Bootstrap Icons (CDN)
- **Formulaire de contact** : envoi direct vers WhatsApp (aucun backend requis)
- **Déploiement** : Netlify

## Structure du site

```
/
├── index.html          # redirection selon la langue du navigateur -> /en/ ou /fr/
├── 404.html             # 404 racine (fallback Netlify)
├── en/ , fr/             # pages du site par langue (index/projects/resume/service/contact/404)
├── assets/css/style.css # design system
├── assets/js/main.js    # page-loader + logique du formulaire de contact
├── img/, cv/             # assets référencés par les pages
└── netlify.toml
```

Chaque langue est un dossier à part avec des pages HTML entièrement traduites (pas de traduction dynamique en JS).

## Fonctionnalités

- **Pages** : About (page d'accueil), Projects, Resume, Services, Contact, page 404 personnalisée.
- **Thème clair / sombre** : bouton de bascule dans le header, préférence mémorisée (`localStorage`), respecte la préférence système au premier chargement, sans flash au chargement.
- **Bilingue anglais / français** : dossiers `/en/` et `/fr/`, sélecteur de langue qui conserve la page courante.
- **Section Projets** : galerie filtrable (Tous / Web Apps / ERP & Business / API & Backend / Projets Personnels), avec lien GitHub direct sur les projets personnels.
- **Formulaire de contact** : au clic sur "Envoyer", les champs (nom/email/sujet/message) sont formatés en message et WhatsApp s'ouvre dans un nouvel onglet avec ce message pré-rempli, prêt à être envoyé vers le numéro configuré dans `assets/js/main.js` (`CONTACT_WHATSAPP_NUMBER`).
- **Animations** : apparition en cascade au scroll, barres de compétences et compteurs animés, effets de survol sur les cartes.
- **SEO** : meta description par page, Open Graph, Twitter Card, balises `hreflang` pour le référencement bilingue.

## Palette & design

Les couleurs et le design system sont centralisés dans `assets/css/style.css` (variables CSS `--color-accent-*`, `--color-neutral-*`, `--color-surface-*`) :
- `accent` : vert sauge/forêt (couleur de marque)
- `surface` : gris charbon utilisé pour le mode sombre

## Modifier le contenu

Il n'y a pas de système de templating : chaque page HTML est autonome. Pour changer un texte, éditer directement le fichier concerné dans `en/` et son équivalent dans `fr/`.

## ⚠️ Important : après chaque modification de `style.css` ou `main.js`

`assets/css/style.css` et `assets/js/main.js` sont référencés avec un suffixe de version (`?v=1`) dans toutes les pages, par exemple :

```html
<link rel="stylesheet" href="../assets/css/style.css?v=1">
<script src="../assets/js/main.js?v=1" defer></script>
```

**Chaque fois que l'un de ces deux fichiers est modifié, il faut incrémenter ce numéro (`?v=1` → `?v=2`, etc.) dans TOUTES les pages qui le référencent** (`en/index.html`, `fr/index.html`, `en/404.html`, `fr/404.html`, `404.html` à la racine). Sans ça, les navigateurs (et le cache de Netlify) peuvent continuer à afficher l'ancienne version pendant des heures/jours après un déploiement, même après un rechargement normal de la page — c'est exactement ce qui a causé la confusion "le site déployé ne ressemble pas à la version locale" pendant le développement de ce projet.

## Déploiement sur Netlify

1. Connecter le repo GitHub à Netlify.
2. Build command : (aucune), Publish directory : `.` (racine du repo) — déjà configuré dans `netlify.toml`.
3. Les balises `canonical`/`hreflang`/`og:url` utilisent des chemins racine (`/en/...`) : une fois le domaine final connu (sous-domaine Netlify ou domaine personnalisé), vérifier qu'elles pointent bien vers ce domaine si besoin de les rendre absolues.

## Prévisualiser en local

```bash
npx serve .
# ou
python3 -m http.server
```

Le formulaire de contact fonctionne aussi en local (il ouvre simplement `wa.me` dans un nouvel onglet, sans dépendre d'un serveur).
