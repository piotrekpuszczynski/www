<footer>
    <ul>
        <li><a href="https://github.com/piotrekpuszczynski">Piotr Puszczyński</a></li>

        <li><p>liczba Twoich odwiedzeń strony: <?php
                if (!isset($_COOKIE["counter"])) {
                    ?>1<?php
                } else {
                    ?><?=$_COOKIE["counter"]?><?php
                }
                ?></p></li>
    </ul>
</footer>