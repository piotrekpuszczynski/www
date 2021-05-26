<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($db) && $_POST["c"]) {
    $s = $db->prepare("insert into comments values (null, :project, :username, :text, :d, :t)");
    $s->bindValue(":project", $_SESSION["comment"]);
    $s->bindValue(":username", $_SESSION["username"]);
    $s->bindValue(":text", $_POST["c"]);
    $s->bindValue(":d", date('d-m-y'));
    $s->bindValue(":t", date("h:i:s"));
    $s->execute();

    header("Location: #comments");
}

if (isset($_SESSION["comment"]) && isset($db)) {
    $stmt = $db->prepare("select * from comments where project=:project");
    $stmt->bindValue(":project", $_SESSION["comment"]);
    $stmt->execute();

    ?>
    <section id="comments">
        <aside><p>Komentarze projektu: <?=$_SESSION["comment"]?></p></aside>
        <article>
            <ul>
                <?php while($r = $stmt->fetch()) {
                    echo "<p>" . $r["date"] . ' ' . $r["time"] . "</p>";
                    echo "<li>";
                    echo "<p class='u'>" . $r["username"] . "&nbsp&nbsp&nbsp</p>";
                    echo "<p class='t'>" . $r["text"] . "</p>";
                    echo "</li>";
                } ?>
            </ul>
            <?php if (isset($_SESSION["username"])) { ?>

                <form method="post">
                    <label>
                        <textarea required="required" name = "c" id="username"></textarea>
                    </label>
                    <button type="submit">post</button>
                </form>

            <?php } ?>
        </article>
    </section>
<?php
}