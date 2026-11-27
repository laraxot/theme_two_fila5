---
title: "Contratti del tema Two"
type: index
tags: [contracts, two]
created: 2026-11-24
updated: 2026-11-24
---

# Contratti del tema Two

Two **non ha Action** e non ha effetti collaterali propri: `app/` contiene solo `Providers/ThemeServiceProvider.php`
(registra viste e traduzioni). Per questo la cartella non contiene contratti, ed e' giusto cosi' finche' il tema resta di
sola presentazione ([ADR](../adr/0002-presentation-only-pub-theme.md)).

**Dove stanno i contratti applicativi:** nei moduli che le pagine richiamano, es. risoluzione delle pagine
(`Modules/Cms/docs/contracts/`), utenti e autenticazione (`Modules/User/docs/contracts/`), consensi
(`Modules/Gdpr/docs/contracts/`), mappe e geocoding (`Modules/Geo/docs/contracts/`).

**Quando leggere questa cartella:** se aggiungi al tema una classe che scrive dati o chiama un servizio esterno, prima
chiediti se deve stare in un modulo; se resta nel tema, il contratto va qui nel formato del
[canon](../../../../Modules/Xot/docs/rules/action-behavioral-contract.md).

## Contratti

Nessuno (il tema non ha Action). Inventario machine-readable: [INDEX.md](INDEX.md); tabella di lavoro: [index.md](index.md); template per un futuro contratto: [_template.md](_template.md).

## Harness minimo: ownership, evidenza e recupero (2026-11-27)

I contratti di **theme_two_fila5** restano accanto alle Action, interfacce o superfici di questo package; root e Xot definiscono lo standard, non copiano le promesse. Un contratto comportamentale esplicita **Input, Output, Invarianti, Effetti collaterali, Errori, Non fa**; ogni ID di invariante punta a un group Pest effettivo oppure segnala `non dimostrata`. Se esiste la classe, il docblock deve rimandare al file con `@contract` e `@see`; per temi senza classi PHP non inventare Action/contratti.

- [Standard Xot](https://github.com/laraxot/module_xot_fila5/blob/dev/docs/contracts/contract-authoring-standard.md) · [ownership root](https://github.com/laraxot/base_ptvx_fila5/blob/dev/docs/adr/0001-harness-minimo-e-ownership.md) · [runbook ECC/Second Brain](https://github.com/laraxot/base_ptvx_fila5/blob/dev/docs/harness/README.md).
- **BMAD**: prima di cambiare una promessa, fissa nella story owner scope, esclusioni, evidenza e approvazioni richieste.
- **ECC**: i marker di merge rendono invalido l'indice; citare una suite non significa averla eseguita. Distingui `pass`, `fail`, `non eseguito` e registra il debito in [rollout #15](https://github.com/laraxot/base_ptvx_fila5/issues/15).
