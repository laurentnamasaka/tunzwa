<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM users
        WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<div class="container">
    <div class="topnavigation">
        <a href="index.php"><img src="./immunization2.png" class="logo"></a>
        <ul style="padding: 15px; margin-right: 50px;">
            <li>
                <a href="booking.php">booking</a>
                <a href="contacts.php">contacts</a>
                <a href="aboutus.php">aboutus</a>
            </li>
        </ul>
        <?php if (isset($user)) : ?>

            <p style="font-size: 12px; text-align: center; padding: 15px; margin-left: -200px;">
                Hello <?= substr($user["name"], 0, strpos($user['name'], ' ')) ?>
            </p>

            <a style="margin-left: -200px;" href="logout.php">Log out</a>

        <?php else : ?>

            <a href="login.php">Log in</a>

        <?php endif; ?>

    </div>

</div>