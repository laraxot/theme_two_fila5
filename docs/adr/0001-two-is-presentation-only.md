---
title: "ADR — Two è solo presentazione"
type: decision
status: accepted
theme: Two
created: 2026-11-27
updated: 2026-11-27
---

# Two è solo presentazione

## Contesto

Two è un tema pubblico per una vetrina e deve mostrare contenuti tenant senza possedere il dominio applicativo.

## Driver della decisione

- ridurre accoppiamento e superficie di sicurezza;
- mantenere i contenuti nei JSON e nei moduli owner;
- evitare richieste esterne non necessarie nel rendering.

## Alternative scartate

- aggiungere controller e Action al tema: duplica il dominio;
- caricare mappe da provider terzi al caricamento: introduce costi e dipendenze runtime.

## Decisione

Two resta un tema di presentazione: pagine da configurazione Folio e mappe come immagine locale con link esplicito.

## Conseguenze

Il rendering è prevedibile e rispettoso della privacy; funzionalità di dominio devono essere aggiunte al modulo owner.

## Conferma

Verificare l'assenza di controller e Action di dominio nel tema e testare asset, rotte e pagine del perimetro.
