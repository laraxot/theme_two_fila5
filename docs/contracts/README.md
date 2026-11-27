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
