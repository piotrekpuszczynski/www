<div id="menu" class="menu">
    <span></span>
    <span></span>
    <span></span>
</div>
<div id="menuBar" class="menuBar">
    <ul>
        <li><a href="#about">O mnie</a></li>
        <li><a href="#projects">Projekty</a></li>
        <li><a href="#code">Fragment kodu</a></li>
        <li><a href="#hobbies">Zainteresowania</a></li>
        <hr/>
        <?php
        if (isset($_SESSION["username"])) {
            //setcookie(session_name(), session_id(), time() + 5 * 60); ?>
            <li><a href="logout.php">Wyloguj się</a></li>
            <?php
        } else {
            ?>
            <li><a href="login.php">Zaloguj się</a></li>
            <li><a href="register.php">Zarejestruj się</a></li>
            <?php
        }
        ?>
    </ul>
</div>

<script src="javascript/script.js"></script>