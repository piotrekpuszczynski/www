<header>
    <h1><?php if(isset($header)) echo $header; ?></h1>
    <p><?php if(isset($_SESSION["username"])) {
            echo "zalogowano jako: ";
            echo $_SESSION["username"];
        } ?></p>
</header>
