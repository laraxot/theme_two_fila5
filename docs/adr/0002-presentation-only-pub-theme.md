---
title: "ADR — Two e' un tema pubblico di sola presentazione: pagine da JSON del tenant, nessun controller"
type: decision
status: accepted
theme: Two
created: 2026-11-24
updated: 2026-11-24
related:
  - ../architecture-data-driven-pages.md
  - ../folio-page-file-rules.md
  - ../cms-routing-philosophy.md
---

# ADR: Two contiene solo presentazione; contenuti e logica stanno fuori dal tema

## Contesto

- Il tema pubblico si sceglie per tenant: `pub_theme` in `config/local/<tenant>/xra.php`, letto da
  `XotData::make()->pub_theme`; Xot/Cms registrano le viste del tema scelto sotto il namespace `pub_theme`.
  Two e' pensato per il sito vetrina di un'azienda di servizi (home, servizi, chi siamo, blog, contatti).
- `Themes/Two/app/` contiene un solo file, `Providers/ThemeServiceProvider.php` (24 righe, registra solo viste e
  traduzioni con alias `two`); il tema non ha `routes/`, ne' controller, ne' Action.
- Le pagine Folio sono generiche: `resources/views/pages/[container0]/index.blade.php` e
  `[container0]/[slug0]/index.blade.php` risolvono la pagina con `Modules\Cms\Actions\ResolvePageAction` e la rendono dai
  blocchi del JSON `config/local/<tenant>/database/content/pages/<slug>.json`.
- Domanda: dove va una pagina nuova, o la logica di un form o di un elenco?

## Driver della decisione

- Il tema si riusa tra installazioni diverse (`pub_theme` per tenant): contenuti e logica non possono stare nel
  codice del tema.
- Le pagine cambiano senza deploy: i contenuti vivono nei JSON versionati del tenant, con review.
- Il routing Folio + Volt e la risoluzione in `Modules/Cms` coprono gia' il front office: niente controller
  duplicati.
- `app/` del tema resta minimale (solo `ThemeServiceProvider`): un confine verificabile e facile da tenere.

## Decisione

- Una pagina di contenuto e' un **file JSON del tenant** con i suoi `blocks`; il tema fornisce solo i componenti
  (`resources/views/components/blocks/**`) che quei blocchi nominano.
- Niente controller, niente `Route::get()` per pagine pubbliche, niente Blade per singola pagina di contenuto
  (`pages/about.blade.php`): routing Folio + Volt, risoluzione in `Modules/Cms`.
- La logica (dati, scritture, mail) sta nei moduli; il tema la richiama da Volt/blocchi.

## Alternative scartate

- **Una Blade per pagina**: 20 file che differiscono solo nel testo; il contenuto finirebbe nel codice del tema, che invece
  si riusa tra installazioni diverse.
- **Controller + rotte nel tema**: duplicano il routing Folio e legano il tema a un dominio applicativo.
- **Contenuti nel database (`Modules/Cms` Page)**: possibili, ma i JSON versionati permettono review e deploy senza dati.

## Conseguenze

- Pro: il tema e' sostituibile senza perdere contenuti; una correzione al renderer vale per tutte le pagine.
- Contro: un errore nel JSON produce una pagina vuota o un 404 (`abort_if` in `[slug0]/index.blade.php`), non un errore di
  compilazione.
- Debito: alcuni blocchi hanno default specifici dell'installazione nei `@props` (indirizzo e percorso immagine in
  `components/blocks/map/embed.blade.php`): i default devono arrivare dal JSON, non dal tema.

## Verifica

Solo revisione: `find Themes/Two/app -name '*.php'` deve dare solo il `ThemeServiceProvider`; `Themes/Two/routes/` non
deve esistere; nessuna nuova Blade sotto `resources/views/pages/` per una pagina di solo contenuto.
