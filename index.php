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

        <?php include __DIR__ . '/navbar.php'; ?>

        <div class="container">
            <div class="body-bg-img">
                <div class="col-6" style="margin-left:35% ;">
                    <center><h1>TUNZWA IMMUNISATION SYSTEM</h1></center>
                    
                </div>
                <div class="col-6" style="margin-left: 25%; padding-top:100px;" >
                
            <center>
                <p>Tunzwa Immunization System is a website designed to ease the long, hectic but vital process of immunization of children. Instead of using physical schedule books that are at risks of losing important vaccination data, this systems allows its users to book immunization dates and it safely saves the information data in a secure database. It then sends reminders on the immunization dates to prevent cases of forgetfullness that in turn leads to missing important vaccines.</p>
                <p>Tunzwa Immunization System functions with a goal of easing the entire immunization process and increasing the immunization rates among children. Missing of essential vaccines might lead to permanent disorders like paralysis or even death. Hence, the system functions to aid in reducing and ultimate eradicating child deaths due to missing vaccinations.</p>
                <p>Tunzwa allows every accessor to get some essential facts and education on the importance of child immunization before anything else. It allows account creation for every accessor that would like to use the system to book vaccination dates. Once the user has successfully registered themselves into the system, they go ahead to book their vaccination dates. They will then receive constant reminders to ensure they do not miss their vaccination sessions.</p>

            </center>
        </div>
            </div>
        </div>

    </body>

    </html>