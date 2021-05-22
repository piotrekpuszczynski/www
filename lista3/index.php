<?php
include('connectToDatabase.php');
include('counter.php');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Piotr Puszczyński</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<main>

    <?php
    $header = "Moja strona";
    include ('header.php');
    include ('menu.php');
    ?>

    <section id="about">
        <aside>
            <figure>
                <img src="res/ja.JPG" alt="Photo of me">
            </figure>
        </aside>
        <article>
            <h1>O mnie</h1>
            <p>
                Nazywam się Piotr Puszczyński. Jestem studentem Politechniki Wrocławskiej
                na kierunku Informatyka Algorytmiczna.
            </p>
            <p>
                Zajmuję się programowaniem w różnych językach (java, c++, python, ...),
                lubię też sporty ekstremalne, głównie szachy.
            </p>
            <p>
                Najłatwiejszym środkiem kontaktu ze mną jest messenger,
                maila praktyzcnie nie używam.
            </p>
        </article>
    </section>

    <section id="projects">
        <aside>
            <figure>
                <img src="res/program.jpg" alt="My chinese checkers app">
            </figure>
        </aside>
        <article>
            <h2>Projekty</h2>
            <p>Jak narazie zrealizowałem dwa wieksze projekty, jeden sam i jeden w zespole dwuosobowym.</p>
            <ul>
                <li>
                    <a href="https://github.com/tofiljr6/WillyWonka">
                        System do obsługi hurtowni słodyczy
                    </a>
                </li>
                <li>
                    <a href="https://github.com/piotrekpuszczynski/checkers">
                        Gra w chińskie warcaby
                    </a>
                </li>
            </ul>
            <p>
                Na zdjęciu widac jak prezentują się chińskie warcaby. Jest to wieloosobowa gra od dwóch do sześciu osób,
                w ktorą można grac przez internet.
            </p>
        </article>
    </section>

    <section id="code">
        <aside>
            <figure>
                <img src="res/kod.jpg" alt="My fragment of code">
            </figure>
        </aside>
        <article>
            <h3>Fragment kodu</h3>
            <p>
                Pokazuję tu kod, który sam napisałem. Są tu trzy metody do operowania na kolejce FIFO.
                Funkcja size() oblicza ile elementów znajduje się w kolejce, insert() dodaje element do kolejki,
                a delete() usuwa najdawniej dodany element.
            </p>
        </article>
    </section>

    <section id="hobbies">
        <article>
            <h4>Zainteresowania</h4>
            <p>
                <b>Matematyka</b> - w wolnej chwili obliczam równania różniczkowe lub przemnażam macierze.
            </p>
            <p>
                <b>Informatyka</b> - lubię poznawać nowe design patterny i tworzyc swoje aplikacje.
            </p>
            <p>
                <b>Sport</b> - podczas wolnego wieczoru robie 5 pompek i 10 przysiadów.
            </p>
            <p>
                <b>Języki</b> - poznaję dużo nowych słów z różnych języków podczas grania w gry wieloosobowe
                takie jak counter-strike.
            </p>
        </article>
    </section>

    <?php include ('footer.php'); ?>

</main>
</body>
</html>
