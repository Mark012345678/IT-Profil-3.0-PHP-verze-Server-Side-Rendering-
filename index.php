<?php
// načtení a dekódování JSON dat
$json = @file_get_contents('profile.json');
$data = $json ? json_decode($json, true) : [];
$name = isset($data['name']) ? $data['name'] : 'Neznámý uživatel';
$skills = isset($data['skills']) && is_array($data['skills']) ? $data['skills'] : [];
?>
<!doctype html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>IT Profil - <?php echo htmlspecialchars($name); ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><?php echo htmlspecialchars($name); ?></h1>
  </header>
  <main>
    <section>
      <h2>Dovednosti</h2>
      <?php if (!empty($skills)): ?>
        <ul>
          <?php foreach ($skills as $skill): ?>
            <li><?php echo htmlspecialchars($skill); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p>Žádné dovednosti nebyly uvedeny.</p>
      <?php endif; ?>
    </section>
  </main>
</body>
</html>
