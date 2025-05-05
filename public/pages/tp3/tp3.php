<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/web/public/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="/web/public/images/php-logo.png">
    <link rel="stylesheet" href="/web/style.css">
    <title>TP 3</title>
</head>
<body class="body">
    <?php include('../header.php'); ?>
    <main class="main">
        <div class="main-container">
            <span class="main-side-panel">
                <div class="button-container-side-panel">
                    <button class="button-side-panel" id="button-exo1-tp6">Exercice 1</button>
                </div>
            </span>
            <section class="main-section">
                <div class="scroll-zone">
                    <?php include('./exo1.php'); ?>
                </div>
            </section>
        </div>
    </main>
    <?php include('../footer.php'); ?>
    <script src="/web/public/pages/tp3/script-tp3.js"></script>
</body>
</html>