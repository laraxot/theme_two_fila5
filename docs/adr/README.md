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

## Harness minimo: ownership, evidenza e recupero (2026-11-27)

Questo indice appartiene a **theme_two_fila5**: ogni decisione su codice, dominio o tema va nell'ADR del package owner; il root registra soltanto i vincoli di composizione. Un ADR richiede una scelta reale con alternative e conseguenze, più una **Conferma** ripetibile (oppure la dichiarazione esplicita che manca). Non creare ADR fittizi per riempire un indice.

- [Confine LaravelDay/harness Xot](https://github.com/laraxot/module_xot_fila5/blob/dev/docs/adr/0042-laravel-day-harness-adoption-boundary.md); [ownership root](https://github.com/laraxot/base_ptvx_fila5/blob/dev/docs/adr/0001-harness-minimo-e-ownership.md).
- **BMAD**: la story owner-local conserva `scope`, `must_not_change`, `evidence`, `approval_required` nei cambi rischiosi.
- **ECC**: nessun marker di merge; distinguere la prova eseguita dal semplice riferimento a un test; se la conferma non è disponibile segnare `non eseguita`.
- **Second Brain**: QMD/Graphify e `.harness/memory/{facts,lessons}.md` sono puntatori a evidenza datata, non copie degli ADR. [Runbook](https://github.com/laraxot/base_ptvx_fila5/blob/dev/docs/harness/README.md) · [Rollout #15](https://github.com/laraxot/base_ptvx_fila5/issues/15).
