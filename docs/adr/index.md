---
title: "Indice degli ADR — Two"
type: index
theme: Two
status: active
updated: 2026-11-27
---

# Indice degli ADR — Two

| ADR | Stato | Perché | Conferma |
|---|---|---|---|
| [0001-two-is-presentation-only](0001-two-is-presentation-only.md) | accepted | Two è un tema pubblico di sola presentazione: nessun controller, Action o dominio nel tema. | Revisione: `app/` contiene solo `ThemeServiceProvider` |
| [0002-presentation-only-pub-theme](0002-presentation-only-pub-theme.md) | accepted | Dettaglio della decisione 0001: pagine dai JSON del tenant via Folio `[container0]`, nessuna Blade per pagina di contenuto. | Revisione: `find Themes/Two/app` e assenza di `routes/` |
| [0003-map-blocks-static-image-and-link](0003-map-blocks-static-image-and-link.md) | accepted | Le mappe sono un'immagine locale con un link esterno: zero costi e zero richieste a terzi al caricamento. | Sì: `tests/Unit/MapBlocksLoadNoThirdPartyTest.php` |

Nota: 0001 e 0002 trattano lo stesso confine «solo presentazione» a due livelli di dettaglio; la fusione è una decisione editoriale da fare con l'owner del tema.

Formato e regole: [README](README.md).
