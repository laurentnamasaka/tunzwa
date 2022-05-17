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

            <p style="font-size: 12px; text-align: center; padding: 15px; margin-left: 150px;">Hello <?= htmlspecialchars($user["name"]) ?></p>

            <a href="logout.php">Log out</a>

        <?php else : ?>

            <a href="login.php">Log in</a>

        <?php endif; ?>

    </div>

</div>