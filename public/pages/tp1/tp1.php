<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/WebPhp/public/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="/WebPhp/public/images/php-logo.png">
    <link rel="stylesheet" href="/WebPhp/style.css">
    <title>TP 1</title>
</head>
<body class="body">
    <?php include('../header.php'); ?>
    <main class="main">
        <div class="main-container">
            <span class="main-side-panel">
                <div class="button-container-side-panel">
                    <button class="button-side-panel" id="button-exo1-tp3">Exercice 1</button>
                    <button class="button-side-panel" id="button-exo2-tp3">Exercice 2</button>
                </div>
            </span>
            <section class="main-section">
                <div class="TP3exercice1" id="tp3exercice1">
                    <section class="section_exo1tp3">
                        <h2>Structure de base</h2>
                        <ul>
                            <li>&lt;html&gt; : Conteneur principal.</li>
                            <li>&lt;head&gt; : Métadonnéeset ressources liées.</li>
                            <li>&lt;body&gt; : Contenu principal de la page.</li>
                        </ul>
                        <br>
                        <h2>Organisation et Sections</h2>
                        <ul>
                            <li>&lt;header&gt; : En-tête de page ou de section.</li>
                            <li>&lt;nav&gt; : Menu de navigation.</li>
                            <li>&lt;main&gt; : Contenu principal de la page.</li>
                            <li>&lt;section&gt; : Regroupement de contenu thématique.</li>
                            <li>&lt;article&gt; : Contenu autonome (articles, blogs, etc...).</li>
                            <li>&lt;aside&gt; : Contenu secondaire (barres latérales, publicités).</li>
                            <li>&lt;footerl&gt; : Pied de page.</li>
                        </ul>
                        <br>
                        <h2>Texte et titres</h2>
                        <ul>
                            <li>&lt;h1&gt; à &lt;h6&gt; : Titre hiérarchisés.</li>
                            <li>&lt;p&gt; : Paragraphe.</li>
                            <li>&lt;span&gt; : Conteneur en ligne pour stylisation ou regroupement.</li>
                            <li>&lt;div&gt; : Conteneur pour le regroupement de blocs.</li>
                            <li>&lt;strong&gt; : Texte important (gras).</li>
                            <li>&lt;em&gt; : Texte en emphase (italique).</li>
                        </ul>
                        <br>
                        <h2>Liens et navigation</h2>
                        <ul>
                            <li>&lt;a&gt; : Lien hypertexte.</li>
                        </ul>
                        <br>
                        <h2>Listes</h2>
                        <ul>
                            <li>&lt;ul&gt; : Liste non ordonnée.</li>
                            <li>&lt;ol&gt; : Liste ordonnée.</li>
                            <li>&lt;li&gt; : Élément d'une liste.</li>
                        </ul>
                        <br>
                        <h2>Tableaux</h2>
                        <ul>
                            <li>&lt;table&gt; : Tableau.</li>
                            <li>&lt;thead&gt; : En-tête de tableau.</li>
                            <li>&lt;tbody&gt; : Corps de tableau.</li>
                            <li>&lt;tr&gt; : Ligne de tableau.</li>
                            <li>&lt;th&gt; : Cellule d'en-tête.</li>
                            <li>&lt;td&gt; : Cellule de données.</li>
                        </ul>
                        <br>
                        <h2>Formulaires et entrées</h2>
                        <ul>
                            <li>&lt;form&gt; : Formulaire.</li>
                            <li>&lt;input&gt; : Champ d'entrée (texte, mot de passe, etc...).</li>
                            <li>&lt;button&gt; : Bouton interactif.</li>
                            <li>&lt;label&gt; : Étiquette pour champs de formulaire.</li>
                            <li>&lt;textarea&gt; : Zone de texte.</li>
                            <li>&lt;select&gt; : Menu déroulant.</li>
                            <li>&lt;options&gt; : Option dans un menu déroulant.</li>
                        </ul>
                        <br>
                        <h2>Multimédia</h2>
                        <ul>
                            <li>&lt;img&gt; : Image.</li>
                            <li>&lt;audio&gt; : Audio.</li>
                            <li>&lt;video&gt; : Vidéo.</li>
                            <li>&lt;source&gt; : Source pour &lt;audio&gt; et &lt;video&gt;.</li>
                        </ul>
                        <br>
                        <h2>Programmation et logique</h2>
                        <ul>
                            <li>&lt;script&gt; : Script (JavaScript).</li>
                            <li>&lt;style&gt; : Feuilles de styles internes.</li>
                        </ul>
                        <br>
                        <h2>Sémentique</h2>
                        <ul>
                            <li>&lt;mark&gt; : Texte surligné.</li>
                            <li>&lt;code&gt; : Bloc de code informatique.</li>
                            <li>&lt;pre&gt; : Texte préformaté.</li>
                            <li>&lt;blockquote&gt; : Tabulation.</li>
                            <li>&lt;cite&gt; : Source ou référence.</li>
                        </ul>
                    </section>
                </div>
                <div class="TP3exercice2" id="tp3exercice2">
                    <section class="section_exo2tp3">
                        <h1>1. Le langage SQL</h1>
                        <h2><blockquote>1.1. Définition</blockquote></h2>
                        <p>
                            Le langage <strong>SQL</strong> (Structured <strong>Q</strong>uery 
                            <strong>L</strong>anguage ou Langage de requêtes structuré) 
                            est un langage comprenant à lui seul l’ensemble des ordres nécessaires à la 
                            création et à la gestion d’une base de données relationnelle. Il a été créé 
                            en 1986 et est en fait l’aboutissement de plusieurs langages 
                            (Sequel en 1977, System/R, …) créés depuis l’apparition du modèle relationnel 
                            en 1970 (le modèle relationnel a été inventé par Mr Codd, un mathématicien de 
                            chez IBM). L'utilisation du langage SQL suppose obligatoirement que les 
                            données aient été définies selon le modèle relationnel au sein d'un SGBDR 
                            (Oracle ©, SQLServer, mySQL, PostgreSQL…).
                        </p>
                        <h2><blockquote>1.2. Les différentes normes utilisées</blockquote></h2>
                        <p>
                            Il existe aujourd'hui plusieurs normes relatives à l'utilisation du 
                            <strong>langage SQL</strong>. La différence entre ces deux normes 
                            se situe principalement dans l'écriture des jointures et dans l'ajout 
                            de fonctionnalités. : 
                        </p>
                        <ul>
                            <li class="tiret"><blockquote>La norme <strong>SQL 89</strong> qui est encore très utilisée actuellement.</blockquote></li>
                            <li class="tiret"><blockquote>La norme <strong>SQL 92</strong>.</blockquote></li>
                            <li class="tiret"><blockquote>Aujourd'hui <strong>SQL 211</strong>.</blockquote></li>
                        </ul>
                        <p>
                            Bien qu'il existe des normes il peut y avoir des différences entre SGBDR dans 
                            la syntaxe. Ainsi on peut lire sur le site de <strong><u>PostgreSQL</u></strong>:
                        </p>
                        <br>
                        <ul>
                            <li>
                                "Le développement de PostgreSQL™ respecte le standard en vigueur, 
                                tant que celui-ci ne s'oppose pas aux fonctionnalités traditionnelles 
                                ou au bon sens…"
                            </li>
                            <br>
                            <li>
                                "SQL-92 définit trois niveaux de conformité : basique (ENTRY), intermédiaire 
                                (INTERMEDIATE) et complète (FULL). La majorité des systèmes de gestion de 
                                bases de données se prétendaient compatibles au standard SQL dès lors 
                                qu'ils se conformaient au niveau Entry"
                            </li>
                        </ul>
                        <br>
                        <h1>2. Le modèle de données utlisé dans le cours</h1>
                        <h2 class="tabulation_ex2TP3"><blockquote>2.1. Le modèle entité-association (ou MCD) d'un établissement hospitalier</blockquote></h2>
                        <h2 class="tabulation_ex2TP3"><blockquote>2.2. Le modèle relationnel (ou MRD) d'un établissement hospitalier</blockquote></h2>
                        <h2 class="tabulation_ex2TP3"><blockquote>2.3. La description textuelle des tables utilisées</blockquote></h2>
                        <p class="positionPKey"><div><mark>fonction_personnel</mark> (<u>code_fonction</u>, libelle_fonction)<br><blockquote>Clé primaire : code_foncion</blockquote></p></div>
                        <p><mark>service</mark> (<u>num_service</u>, libelle_service, capacite_accueil, date_ouverture)<br>Clé primaire : num_service</p>
                    </section>
                </div>
            </section>
        </div>
    </main>
    <?php include('../footer.php'); ?>
    <script src="/WebPhp/public/pages/tp1/script-tp1.js"></script>
</body>
</html>