# IT Profil (PHP SSR)

Krátký příklad server-side renderovaného osobního profilu v PHP.

Struktura projektu

/
- index.php
- profile.json
- style.css

Poznámky
- Data jsou v souboru `profile.json`.
- `index.php` načítá data pomocí `file_get_contents()` a `json_decode(..., true)` a vykreslí obsah bez JavaScriptu.
- Výstup je bezpečně escapován přes `htmlspecialchars()`.

# IT-Profil-3.0-PHP-verze-Server-Side-Rendering-