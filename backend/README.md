<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Domaine de Chadenac - Projet Laravel

Bienvenue dans le projet de gestion des réservations pour le Domaine de Chadenac. Ce projet est construit avec Laravel et est entièrement configuré pour un usage en français.

## Fonctionnalités principales

- Gestion des utilisateurs avec rôles et permissions.
- Connexion localisée (route `/connexion`).
- Création et gestion de réservations.

## Configurations en français

Laravel a été configuré pour un usage en français :
- Langue par défaut définie en français.
- Messages de validation traduits en français.

⚠️ **Important** : L’utilisateur admin (`admin@chadenac.com`) avec le mot de passe `admin` est un utilisateur de test. Modifiez ces informations avant la mise en production.

## Routes spécifiques

### Connexion

La route `/connexion` permet aux utilisateurs de se connecter.

**Exemple :**

POST `/connexion`

Corps de la requête :

```json
{
    "email": "admin@chadenac.com",
    "password": "motdepasse"
}
```

Réponse :

```json
{
    "token": "abc123",
    "user": {
        "id": 1,
        "name": "Admin",
        "email": "admin@chadenac.com"
    }
}
```

## Contribuer

Merci de considérer contribuer au framework Laravel ! Le guide de contribution se trouve dans la [documentation de Laravel](https://laravel.com/docs/contributions).

## Code de Conduite

Afin de garantir que la communauté Laravel soit accueillante pour tous, veuillez consulter et respecter le [Code de Conduite](https://laravel.com/docs/contributions#code-of-conduct).

## Vulnérabilités de Sécurité

Si vous découvrez une vulnérabilité de sécurité dans Laravel, veuillez envoyer un e-mail à Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). Toutes les vulnérabilités de sécurité seront traitées rapidement.

## Licence

Le framework Laravel est un logiciel open-source sous licence [MIT](https://opensource.org/licenses/MIT).
