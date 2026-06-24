# Session start

Before any work in a new session, read these context sources in order.
Sources 1-3 are loaded *by reference* (this file points at them, it does not contain them);
the codebase map at the bottom lives here because it is versioned with the code.

1. **GLOBAL RULES** — `~/.claude/CLAUDE.md`. Partnership mindset, Plan First, workflow,
   the `архив` / `коммит` / `поехали` commands.
2. **GLOBAL MEMORY** — every file in `~/.claude/memory/**` (if present). Cross-project:
   user profile, a digest of the global rules (`reference_global_rules.md`), and the
   session-data layout (`reference_session_data_layout.md`).
3. **PROJECT MEMORY** — `~/.claude/projects/<this-project>/memory/`. The single source of
   truth for project knowledge: decisions, scheduled checkpoints, bug tracker, live config,
   findings, session history. Read `MEMORY.md` (the index) first, then open the topic files
   it links on demand — do **not** bulk-read the whole dir. Resolve the path from cwd:
   ```bash
   ls ~/.claude/projects/$(echo "$PWD" | sed 's|/|-|g')/memory/
   ```

Only after reading sources 1-3, start the session's tasks.

## Memory protocol (read AND maintain)

- **One operational memory, one location.** All project memory lives in source #3. Do **not**
  create a `./memory/` in the repo — a second store causes a split brain.
- **Absolute paths only.** Never scan from `/`; projects live under `~/Projects/**`
  (global rules → *Filesystem & Paths*).
- **Update memory after every task** (content edit, audit, investigation) automatically, without
  being asked — a mandatory final step like lint/audit (global rules → *After Completing a Task*).
  New finding → a topic file in #3 plus one index line in its `MEMORY.md`.
- **`MEMORY.md` hard cap: ≤ 24 KB AND ≤ 190 lines.** Claude Code loads only the first 200 lines
  / 25 KB; the rest is silently dropped. Check `wc -c` and `wc -l` on every update; details go
  in topic files, never inline in the index.

## Why this file exists

ZCode (opencode convention) loads only `<project>/AGENTS.md` and ignores `CLAUDE.md` and the global
files — so this file is the single source for both ZCode and Codex. Claude Code instead auto-loads
`<project>/CLAUDE.md`; pair this file with a thin `CLAUDE.md` (from `CLAUDE.template.md`) whose only
job is `@AGENTS.md`, so Claude Code reaches this same file. So it does double duty: a **bootloader**
pointing at global rules + memory (sources 1-3), and the **in-repo codebase map** below.

---

# Project — mywebinar-locales-go (codebase map)

Локализации вебинарной комнаты на Go/Pion SFU (потребитель = `mywebinar-node-webrtc-go`).
Контент-репо: PHP-массивы переводов, не кодовая логика.

## Production

Отдельный git-репо, деплоится Dmytro (синк локалей с сервером Go-комнаты — вне задачи Claude).
SSH/деплой — только с явного подтверждения (global rules → *Production access*).

## Layout

```
{lang}/            34 локали (ar be bg br cn cz da de en es et fi gr he hi hu it
  rooms.php          ja ka kk lt lv nb nl pl pt ro ru sk sl sv tr uk)
  files.php          rooms.php — главный (~420 ключей), files.php ~154, tests.php ~149
  tests.php
_mapjs/             manifest-файлы: списки ключей для экспорта в JS-рантайм комнаты
  list-guest.php      подмножество ключей для guest-режима
  list-moderators.php ключи для moderator-режима
README.md  LICENSE (MIT)  .gitignore (.DS_Store)
```

## Key files

| File | Purpose |
|------|---------|
| `{lang}/rooms.php` | Главные переводы интерфейса комнаты (~420 ключей в en) |
| `{lang}/files.php` | Переводы файлового модуля (~154 ключа) |
| `{lang}/tests.php` | Переводы модуля ТЕСТА знаний (~149 ключей; НЕ poll/survey) |
| `_mapjs/list-guest.php` | Manifest ключей для guest-интерфейса |
| `_mapjs/list-moderators.php` | Manifest ключей для moderator-интерфейса |

## Conventions

- **PHP-формат:** `return ['key' => ////...////\n'\n  текст\n', ...];` — служебные `//////`
  разделители (~60% файла) и 6-строчная copyright-шапка. Не править разделители/шапку без нужды.
- **Нет en-fallback:** отсутствующий ключ → сырой ключ в UI (не английский). Новый ключ — во все
  34 языка, либо переиспользовать существующий.
- **НЕ путать с `mywebinar-locales-cp`** (локали панели, 5 файлов, remote `…locales-cp.git`) —
  это два разных репозитория. Детали отличий — в PROJECT MEMORY → `reference_locales_go.md`.
- **Copyright header** (org default, prepend to every new locale file):
```
// +-------------------------------------------------------------------+
// | Copyright 2003-2023 MyOwnConference.com. All rights reserved.     |
// |                                                                   |
// | Unauthorized copying of this file, via any medium is strictly     |
// | prohibited. Proprietary and confidential.                         |
// |                                                                   |
// | Written for myownconference.com <contact@myownconference.com>     |
// +-------------------------------------------------------------------+
```
