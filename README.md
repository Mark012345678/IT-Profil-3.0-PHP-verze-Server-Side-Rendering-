# IT Profil (PHP SSR)

Krátký příklad server-side renderovaného osobního profilu v PHP.

Struktura projektu

/
- index.php
- profile.json
- style.css

Spuštění lokálně (vyžaduje PHP):

```bash
php -S 0.0.0.0:8000
# Otevřít v prohlížeči: http://localhost:8000
```

Otevření portu v GitHub Codespaces

1. Spusť PHP server v Codespace terminálu (např. port 8000):

```bash
php -S 0.0.0.0:8000
```

2. Ve VS Code (Codespaces) otevři panel `Ports` (View → Ports).
   - Najdi port `8000` (měl by se objevit jako LISTENING).
   - Klikni na ikonu "Open in Browser" (globe) nebo vyber `Forward Port` → `Open Browser`.
   - Pokud potřebuješ veřejný přístup, klikni na tři tečky u portu a zvol `Make Public` (pozor na bezpečnost).

3. Zastavení serveru: najdi PID a ukonči ho, nebo použij `Ctrl+C` v terminálu, kde běží server.

Příklad (pokud chceš najít PID a zastavit proces):

```bash
# najít PID naslouchajícího procesu
lsof -i :8000 -sTCP:LISTEN -t
# ukončit proces (nahraď <PID>)
kill <PID>
```

Poznámky
- Data jsou v souboru `profile.json`.
- `index.php` načítá data pomocí `file_get_contents()` a `json_decode(..., true)` a vykreslí obsah bez JavaScriptu.
- Výstup je bezpečně escapován přes `htmlspecialchars()`.

Commity v historii využívají Conventional Commits (např. `feat(php): ...`, `style(css): ...`, `docs(readme): ...`).
