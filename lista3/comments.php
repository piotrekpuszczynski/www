<?php

if (isset($_SESSION["comment"])) {
    ?>
    <section id="comments">
        <aside><p>Komentarze projektu: <?=$_SESSION["comment"]?></p></aside>
        <article>

        </article>
    </section>
<?php
}