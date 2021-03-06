<?php
session_start();
include('connectToDatabase.php');
$header = "Rejestracja";

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($db)) {
    $username = $_POST["username"];
    $password = hash("sha256", $_POST["password"]);
    $email = $_POST["email"];

    $stmt = $db->prepare("insert into users values (:username, :email, :password)");
    $stmt->bindValue(":username", $username);
    $stmt->bindValue(":password", $password);
    $stmt->bindValue(":email", $email);

    try {
        $stmt->execute();
        $_SESSION["username"] = $username;
        setcookie("session", "session", time() + 5 * 60);
        header("Location: /www/lista3/index.php");
    } catch (PDOException) {
        $error = "już istnieje urzytkownik o podanej nazwie urzytkownika lub emailu";
    }
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
            <label for="email">E-mail</label>
            <input type="email" id="email" required="required" name="email">
        </div>
        <div class="input">
            <button type="submit">zarejestruj się</button>
        </div>
        <p class="error"><?php if (isset($error)) echo $error ?></p>
        <p class="input">Masz już konto? <a href="login.php">zaloguj się</a></p>
    </form>

    <?php include ('footer.php'); ?>

</main>
</body>
</html>
