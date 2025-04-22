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