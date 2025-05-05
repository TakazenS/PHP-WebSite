<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/web/public/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="/web/public/images/php-logo.png">
    <link rel="stylesheet" href="/web/style.css">
    <title>TP 2</title>
</head>
<body class="body">
    <?php include('../header.php'); ?>
    <main class="main">
        <div class="main-container">
            <span class="main-side-panel">
                <div class="button-container-side-panel">
                    <button class="button-side-panel reset-btn-memory" id="reset-btn-memory">Réinitialiser</button>
                </div>
            </span>
            <section class="main-section" id="main-section">
                <div class="memory">
                    <section class="container-memory" id="container-memory">
                        <div class="card" id="card1"><img src="/web/public/images/memory/banane.png" alt="fruit1" id="fruit1"></div>
                        <div class="card" id="card2"><img src="/web/public/images/memory/banane.png" alt="fruit2" id="fruit2"></div>
                        <div class="card" id="card3"><img src="/web/public/images/memory/cerise.png" alt="fruit3" id="fruit3"></div>
                        <div class="card" id="card4"><img src="/web/public/images/memory/cerise.png" alt="fruit4" id="fruit4"></div>
                        <div class="card" id="card5"><img src="/web/public/images/memory/coconut.png" alt="fruit5" id="fruit5"></div>
                        <div class="card" id="card6"><img src="/web/public/images/memory/coconut.png" alt="fruit6" id="fruit6"></div>
                        <div class="card" id="card7"><img src="/web/public/images/memory/fraise.png" alt="fruit7" id="fruit7"></div>
                        <div class="card" id="card8"><img src="/web/public/images/memory/fraise.png" alt="fruit8" id="fruit8"></div>
                        <div class="card" id="card9"><img src="/web/public/images/memory/kiwi.png" alt="fruit9" id="fruit9"></div>
                        <div class="card" id="card10"><img src="/web/public/images/memory/kiwi.png" alt="fruit10" id="fruit10"></div>
                        <div class="card" id="card11"><img src="/web/public/images/memory/orange.png" alt="fruit11" id="fruit11"></div>
                        <div class="card" id="card12"><img src="/web/public/images/memory/orange.png" alt="fruit12" id="fruit12"></div>
                        <div class="card" id="card13"><img src="/web/public/images/memory/pasteque.png" alt="fruit13" id="fruit13"></div>
                        <div class="card" id="card14"><img src="/web/public/images/memory/pasteque.png" alt="fruit14" id="fruit14"></div>
                        <div class="card" id="card15"><img src="/web/public/images/memory/poire.png" alt="fruit15" id="fruit15"></div>
                        <div class="card" id="card16"><img src="/web/public/images/memory/poire.png" alt="fruit16" id="fruit16"></div>
                        <div class="card" id="card17"><img src="/web/public/images/memory/pomme.png" alt="fruit17" id="fruit17"></div>
                        <div class="card" id="card18"><img src="/web/public/images/memory/pomme.png" alt="fruit18" id="fruit18"></div>
                        <div class="card" id="card19"><img src="/web/public/images/memory/raisin.png" alt="fruit19" id="fruit19"></div>
                        <div class="card" id="card20"><img src="/web/public/images/memory/raisin.png" alt="fruit20" id="fruit20"></div>
                    </section>
                </div>
            </section>
        </div>
    <audio id="feuille" src="/web/public/audio/feuille.mp3"></audio>
    </main>
    <?php include('../footer.php'); ?>
    <script src="/web/script.js"></script>
    <script src="/web/public/pages/tp2/script-tp2.js"></script>
</body>
</html>