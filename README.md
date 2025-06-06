# Ink and Intent

Last Updated: 05 JUN 2025

-   [Ink and Intent](#ink-and-intent)
    -   [About This Project](#about-this-project)
        -   [Built With](#built-with)
        -   [Locally Managed With](#locally-managed-with)
    -   [Directory Structure](#directory-structure)
    -   [Development Workflow](#development-workflow)
        -   [Git \& Version Control](#git--version-control)
        -   [Oxygen Exports](#oxygen-exports)
    -   [Database Handling](#database-handling)
    -   [Contact](#contact)

---

---

## About This Project

This is the version-controlled Ink And Intent WordPress site, an online shop for all your organizational needs.

_Design Your Days With Meaning_

### Built With

-   HTML
-   CSS
-   JavaScript
-   PHP
-   WordPress
    -   [Oxygen Builder](https://oxygenbuilder.com/)
    -   [WooCommmerce](https://woocommerce.com/)
-   Git

### Locally Managed With

-   [Local.app by WP Engine](https://localwp.com/)

## Directory Structure

This repository is initialized inside the `app/public/` folder of a Local.app WordPress installation. It tracks only custom code and relevant Oxygen content. WordPress core files, local configuration, and media uploads are excluded to keep the repository lightweight.

Key custom directories:

| Path                                      | Purpose                                                   |
| ----------------------------------------- | --------------------------------------------------------- |
| `wp-content/plugins/ink-and-intent-core/` | Custom plugins for site logic: hooks, filters, shortcodes |
| `wp-content/themes/ink-and-intent/`       | Custom or child theme (optional, for styles/templates)    |
| `wp-content/uploads/oxygen/`              | Oxygen’s internal storage for reusable parts/templates    |
| `oxygen-exports/`                         | Manually exported Oxygen templates (JSON) for backup      |

## Development Workflow

1. Work locally using Local.app and the Oxygen visual builder.
2. Place custom logic, hooks, and functions in the `wp-content/plugins/ink-and-intent-core/` directory.
3. Add any necessary theme-level assets (CSS, JS, WooCommerce template overrides) to `wp-content/themes/ink-and-intent/`.
4. Optionally export Oxygen templates to the `oxygen-exports/` directory.
    - Export templates from **Oxygen → Templates → Export** and save them into this folder manually.
5. Commit and push changes using Git.

### Git & Version Control

-   The repository is initialized in `app/public/` only.
-   The `.gitignore` file is configured to:

    -   Track only custom code and Oxygen exports
    -   Ignore WordPress core, uploads, backups, and default plugins/themes

### Oxygen Exports

The `oxygen-exports/` directory is used to store manually exported `.json` files of Oxygen templates. This serves as a version-controlled backup and allows for easy migration or reuse of layouts across environments.

## Database Handling

Database files are not tracked in this repository. If needed, export the database manually using WP-CLI:

```bash
wp db export ../sql/dev.sql
```

The `/sql/` directory is excluded from version control to avoid committing large or sensitive files.

## Contact

Nate: [Website](https://outpostwebstudio.com/lets-talk-shop/) | [GitHub](https://github.com/nvsmith)
