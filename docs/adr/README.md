---
title: "ADR del tema Two"
type: index
tags: [adr, decisioni, two]
created: 2026-11-24
updated: 2026-11-24
---

# ADR del tema Two

Two e' un tema pubblico di sola presentazione per un sito vetrina aziendale: le sue decisioni riguardano cosa **non** sta
nel tema (contenuti, logica, rotte) e come si mostrano le mappe senza costi ne' richieste a terzi.

**Quando leggerli:** prima di aggiungere una pagina, un controller o una rotta al tema, o un blocco con contenuti esterni
(mappe, embed). Formato: [regola del canon](../../../../Modules/Xot/docs/rules/action-behavioral-contract.md).

## Decisioni

- [Two è solo presentazione](0001-two-is-presentation-only.md) — il tema è presentazione pura: pagine da configurazione Folio, nessun dominio applicativo.
- [Tema di sola presentazione](0002-presentation-only-pub-theme.md) — pagine dai JSON del tenant via Folio `[container0]`, nessun controller ne' Action nel tema (approfondimento dell'ADR 0001).
- [Mappe come immagine locale + link](0003-map-blocks-static-image-and-link.md) — niente API a pagamento, niente iframe o script di terzi al caricamento.

L'indice completo e' in [index.md](index.md).
