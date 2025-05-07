<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/web/public/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="/web/public/images/php-logo.png">
    <link rel="stylesheet" href="/web/style.css">
    <title>TP 4</title>
</head>
<body class="body">
    <?php include('../header.php'); ?>
    <main class="main">
        <div class="main-container">
            <span class="main-side-panel">
                <div class="button-container-side-panel">
                    <button class="button-side-panel" id="button-exo1-tp7">Exercice 1</button>
                    <button class="button-side-panel" id="button-exo2-tp7">Exercice 2</button>
                    <button class="button-side-panel" id="button-exo3-tp7">Exercice 3</button>
                    <button class="button-side-panel" id="button-exo4-tp7">Exercice 4</button>
                    <button class="button-side-panel" id="button-exo5-tp7">Exercice 5</button>
                    <button class="button-side-panel" id="button-exo6-tp7">Exercice 6</button>
                    <button class="button-side-panel" id="button-exo7-tp7">Exercice 7</button>
                </div>
            </span>
            <section class="main-section" id="main-section">
                <?php include('./exo1.php'); ?>
                <?php include('./exo2.php'); ?>
                <?php include('./exo3.php'); ?>
                <?php include('./exo4.php'); ?>
                <?php include('./exo5.php'); ?>
                <?php include('./exo6.php'); ?>
                <?php include('./exo7.php'); ?>
            </section>
        </div>
    </main>
    <?php include('../footer.php'); ?>
    <script src="/web/script.js"></script>
    <script src="/web/public/pages/tp4/script-tp4.js"></script>
</body>
</html>