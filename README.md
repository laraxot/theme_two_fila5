# Two

Tema frontend `Two` del monorepo `base_techplanner_fila5` (`laravel/Themes/Two`), basato su Tailwind CSS 4 e Vite, con viste Blade e componenti Filament 5.

## Requisiti

- PHP ^8.3
- Laravel con Filament ^5 (tables, schemas, forms, infolists, actions, notifications, widgets, support)

## Installazione

Repository dedicato: `laraxot/theme_two_fila5`. Nel monorepo il tema e' gia' in `laravel/Themes/Two`; il service provider e' `Themes\Two\Providers\ThemeServiceProvider`.

```bash
cd laravel/Themes/Two
npm install
npm run build
```

Gli asset compilati restano in `public/` del tema (vedi `vite.config.js`).

## Configurazione

- `config/theme.php`
- `vite.config.js`, `tailwind.config.js`, `postcss.config.js`

## Test

Non e' definito uno script di test nel tema.

## Documentazione

Vedi [docs/README.md](docs/README.md).

## Licenza

Vedi [LICENSE](LICENSE) (MIT). Nota: `composer.json` dichiara `proprietary`; licenza da confermare.
