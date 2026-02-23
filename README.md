# IT Profil (PHP SSR)

Krátký příklad server-side renderovaného osobního profilu v PHP.

Struktura projektu

/
- index.php
- profile.json
- style.css

Spuštění lokálně (vyžaduje PHP):

```
php -S 0.0.0.0:8000
# Otevřít v prohlížeči: http://localhost:8000
```

Poznámky
- Data jsou v souboru `profile.json`.
- `index.php` načítá data pomocí `file_get_contents()` a `json_decode(..., true)` a vykreslí obsah bez JavaScriptu.
- Výstup je bezpečně escapován přes `htmlspecialchars()`.

Commity v historii využívají Conventional Commits (např. `feat(php): ...`, `style(css): ...`, `docs(readme): ...`).
# IT-Profil-3.0-PHP-verze-Server-Side-Rendering-