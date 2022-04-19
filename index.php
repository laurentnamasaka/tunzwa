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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- main style document -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="topnavigation">
            <a href="index.html"><img src="./immunization2.png" class="logo"></a>
            <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="booking.html">booking</a></li>
                <li><a href="education.html">education</a></li>
                <li><a href="contacts.html">contacts</a></li>
                <li><a href="aboutus.html">aboutus</a></li>
            </ul>


                 <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a>
        
    <?php endif; ?>
          
        </div>
       
    </div>
    
    <div class="container">
        <div class="body-bg-img">
            <h1>TUNZWA IMMUNISATION SYSTEM</h1>
        </div>
    </div>

    Install prettier extension
    Ctrl Shift 
    
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    