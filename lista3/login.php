<?php
session_start();
include('connectToDatabase.php');
$header = "Logowanie";

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($db)) {
    $username = $_POST["username"];
    $password = hash("sha256", $_POST["password"]);

    $stmt = $db->prepare("select password from users where username=:username");
    $stmt->bindValue(":username", $username);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    foreach ($result as $row => $link) {
        $result = $link;
    }

    if ($result == $password) {
        $_SESSION["username"] = $username;
        setcookie("session", "session", time() + 5 * 60);
        header("Location: /www/lista3/index.php");
    }

    $error = "błędna nazwa urzytkownika lub haslo";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title><?php echo $header ?></title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<main class="inputLayout">

    <?php include ('header.php'); ?>

    <form method="post" class="inputDiv">
        <div class="input">
            <label for="username">Nazwa</label>
            <input type="text" id="username" required="required" name="username">
        </div>
        <div class="input">
            <label for="password">Hasło</label>
            <input type="password" id="password" required="required" name="password">
        </div>
        <div class="input">
            <button type="submit">zaloguj się</button>
        </div>
        <p class="error"><?php if (isset($error)) echo $error ?></p>
        <p class="input">Nie masz konta? <a href="register.php">zarejestruj się</a></p>
    </form>

    <?php include ('footer.php'); ?>

</main>
</body>
</html>
