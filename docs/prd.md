# Theme Two - Product Requirements Document (PRD)

> Documento vivente. Tema frontend secondario/legacy.
> Stato stimato: 34% implementato, 66% da chiarire o migrare.

## 1. Purpose & Vision

**Two** appare come tema frontend alternativo con stack misto e dipendenze ancora non convergenti rispetto alla direzione principale del progetto.

**Visione**: chiarire se il tema deve diventare un tema pubblico realmente supportato oppure restare laboratorio/legacy da dismettere.

## 2. Problem Statement

Oggi il tema esiste ma il suo ruolo non e' pienamente definito:
- documentazione minima
- dipendenze ancora agganciate a Filament 3
- perimetro funzionale poco chiaro rispetto a TwentyOne e Zero

## 3. Target Users

| User | Ruolo | Bisogni |
|------|-------|---------|
| **Team tecnico** | Decide il futuro del tema | Chiarezza su mantenimento o dismissione |
| **Sviluppatore frontend** | Eventualmente lo evolve | Contratto chiaro e stack coerente |

## 4. Scope

### In Scope
- Analisi ruolo tema
- Documentazione minima di perimetro e rischio
- Eventuale convergenza stack

### Out of Scope
- Diventare tema principale senza decisione architetturale esplicita
- Nuove feature prediction market critiche

## 5. Functional Requirements

### P0
- **FR-001**: Dichiarare se il tema e' supportato, sperimentale o legacy.
- **FR-002**: Allineare le dipendenze al target stack del progetto oppure pianificarne la rimozione.

### P1
- **FR-003**: Definire quali pagine o componenti, se esistono, sono ancora attivi.

## 6. Non-Functional Requirements

- **NFR-001**: Nessun tema ambiguo nel repo senza ownership chiara.
- **NFR-002**: Nessuna dipendenza legacy critica non documentata.

## 7. Current State & Gaps

### Stato reale al 2026-03-12
- Ruolo documentato: **20%**
- Stack coerente col progetto: **25%**
- Readiness per uso reale: **15%**

### Gap prioritari
- chiarire ownership e destino del tema
- verificare dipendenze legacy
- decidere se convergerlo o archiviarlo

## 8. Success Metrics

| Metrica | Target |
|--------|--------|
| Stato del tema esplicitato | 100% |
| Dipendenze legacy non spiegate | 0 |

## 9. References

- [PRD Indice Centrale](../../../../docs/project/PRD_INDEX_2026_03_12.md)
- [theme.json](../theme.json)

## Testing & Coverage

- smoke test solo se il tema viene confermato supportato
- in assenza di roadmap, nessun investimento eccessivo su feature nuove
