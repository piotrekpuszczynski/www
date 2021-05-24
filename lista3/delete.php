<?php
session_start();
include('connectToDatabase.php');
$header = "Usuwanie konta";

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($db)) {
    $password = hash("sha256", $_POST["password"]);
    $username = $_SESSION["username"];

    $stmt = $db->prepare("select password from users where username=:username");
    $stmt->bindValue(":username", $username);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    foreach ($result as $row => $link) {
        $result = $link;
    }

    if ($result == $password) {
        $stmt = $db->prepare("delete from users where username=:username");
        $stmt->bindValue(":username", $username);

        $stmt->execute();
        include('logout.php');
    }

    $error = "błędne haslo";
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
        <p class="input">Wpisz hasło aby usunąć konto</p>
        <div class="input">
            <label>
                <input type="password" required="required" name="password">
            </label>
        </div>
        <div class="input">
            <button type="submit">potwierdź</button>
        </div>
        <p class="error"><?php if (isset($error)) echo $error ?></p>
    </form>

    <?php include ('footer.php'); ?>

</main>
</body>
</html>