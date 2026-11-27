---
title: "ADR — I blocchi mappa di Two sono un'immagine locale con un link, senza API ne' iframe di terzi"
type: decision
status: accepted
theme: Two
created: 2026-11-24
updated: 2026-11-24
related:
  - ../map-free-rules.md
  - ../../../../Modules/Geo/docs/adr/0003-osm-proxy-tile-nominatim.md
---

# ADR: mappa = immagine statica locale + link a un servizio di mappe

## Contesto

- Il sito mostra la sede in "Dove siamo" e nei contatti: serve far vedere il posto e aprire la navigazione, non una mappa
  interattiva.
- Google Maps JavaScript API richiede chiave e fatturazione ([map-free-rules](../map-free-rules.md): «MAI usare Google Maps
  API a pagamento»).
- Un iframe o un tile caricato da un dominio terzo all'apertura della pagina passa l'IP del visitatore al terzo prima di
  ogni scelta sui cookie: e' lo stesso problema che il modulo Geo risolve con un proxy
  (`Modules/Geo/docs/adr/0003-osm-proxy-tile-nominatim.md`).
- Domanda: come si mostra una mappa nel tema senza costi e senza richieste a terzi?

## Decisione

- `components/blocks/map/embed.blade.php` e `components/blocks/map/static-clickable.blade.php` mostrano un'**immagine
  servita dal nostro dominio** (PNG pre-generato) dentro un link `target="_blank" rel="noopener noreferrer"` verso
  `https://www.google.com/maps/search/?api=1&query=<indirizzo>` (URL pubblico, nessuna chiave).
- Il terzo riceve l'IP solo se il visitatore clicca il link.
- Una mappa interattiva, se servisse, passa dalle rotte proxy del modulo Geo, non da script o iframe diretti.

## Alternative scartate

- **Google Maps JavaScript/Embed API**: chiave, fatturazione, richiesta a Google a ogni visita.
- **iframe OpenStreetMap/Nominatim**: gratis ma chiama un terzo al caricamento; Nominatim vieta usi tipo widget
  (Usage Policy) e chiede al massimo 1 richiesta al secondo.
- **Leaflet con tile diretti**: stessa fuga di IP dell'iframe, piu' JS da caricare.

## Conseguenze

- Pro: zero costi, zero richieste a terzi al caricamento, nessun JS.
- Contro: l'immagine va rigenerata a mano se cambia la sede; nessuno zoom.
- Debito: `components/blocks/company/data.blade.php` ha ancora un `<iframe src="https://nominatim.openstreetmap.org/search?format=iframe...">`:
  viola questa decisione e la policy di Nominatim; va sostituito con il blocco mappa.

## Verifica

`Themes/Two/tests/Unit/MapBlocksLoadNoThirdPartyTest.php` (sorgente, senza app): nessun blocco in
`components/blocks/map/` contiene `<iframe`, `<script` o `src` assoluti verso un dominio esterno, e nessuna vista del tema
carica `maps.googleapis.com`. Il blocco `company/data` e' fuori dal test finche' il debito non e' chiuso.
