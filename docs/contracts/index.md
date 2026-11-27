---
title: "Indice dei contratti — Two"
type: index
theme: Two
status: active
created: 2026-11-27
updated: 2026-11-27
qmd: "two contracts index"
---

# Indice dei contratti — Two

Two non ha Action ne' superfici con effetti collaterali propri: `app/` contiene solo
`Providers/ThemeServiceProvider.php` (registra viste e traduzioni). Non ci sono file
`type: contract` e nessun invariante `<SCOPE>-INV-<N>` da coprire.

## Contratti

| Contratto | Action | File | Invarianti (group Pest) |
|---|---|---|---|
| — | — | Nessuno | — |

## Note

- I contratti applicativi stanno nei moduli: `Modules/Cms/docs/contracts/` (pagine),
  `Modules/User/docs/contracts/` (autenticazione), `Modules/Gdpr/docs/contracts/` (consensi),
  `Modules/Geo/docs/contracts/` (mappe e geocoding).
- Formato per un futuro contratto: [README.md](README.md) e [_template.md](_template.md).
