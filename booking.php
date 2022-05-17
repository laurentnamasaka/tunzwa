<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- main style document -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>


    <div class="row">
        <div class="col-6">
            <div class="w-100">
                <!--creating the booking form-->
                <form action="bookingconnect.php" method="post" style="margin-top: -90px;">
                    <center>
                        <h2 style=" padding:10px;"> TUNZWA BOOKING </h2>
                    </center>

                    <p>Book your upcoming immunizations here</p>

                    <div class="row">
                        <div class="col" style='width:50%;'>
                            <label for="FirstName"><b>First Name</b></label>
                            <input type="text" name='FirstName' id='FirstName' required placeholder="First Name">
                        </div>

                        <div class="col" style='width:50%;'>
                            <label for="Surname"><b>Surname</b></label>
                            <input type="text" name='Surname' id='Surname' required placeholder="Surname">
                        </div>

                        <div class="col-2" style='width:60%;'>
                            <label for=" MiddleName"><b> Middle name</b></label>
                            <input type="text" name='MiddleName' id='MiddleName' required placeholder="Middle Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style='width:50%;'>
                            <label for="DOB">Date of Birth</label>
                            <input type="date" name="DOB" id="DOB">
                        </div>

                        <div class="col" style='width:50%;'>
                            <label for="Gender">Gender</label>
                            <select name='Gender' id='Gender' required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="bisexual">Bi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style='width:50%;'>
                            <label for="HomeAddress"><b> Home Address</b></label>
                            <input type="text" name='HomeAddress' id='HomeAddress' required placeholder="Enter Home Address">
                        </div>

                        <div class="col" style='width:50%;'>
                            <label for="County">County</label>
                            <select name='County' id='County'>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kwale">Kwale</option>
                                <option value="Kilifi">Kilifi</option>
                                <option value="TanaRiver">Tana River</option>
                                <option value="Lamu">Lamu</option>
                                <option value="TaitaTaveta">TaitaTaveta</option>
                                <option value="Garissa">Garissa</option>
                                <option value="Wajir">Wajir</option>
                                <option value="Marsabit">Marsabit</option>
                                <option value="Mandera">Mandera</option>
                                <option value="Isiolo">Isiolo</option>
                                <option value="Meru">Meru</option>
                                <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                                <option value="Embu">Embu</option>
                                <option value="Machakos">Machakos</option>
                                <option value="Makueni">Makueni</option>
                                <option value="Nyandarua">Nyandarua</option>
                                <option value="Nyeri">Nyeri</option>
                                <option value="Kirinyaga">Kirinyaga</option>
                                <option value="Muranga">Muranga</option>
                                <option value="Kiambu">Kiambu</option>
                                <option value="Turkana">Turkana</option>
                                <option value="WestPokot">WestPokot</option>
                                <option value="Samburu">Samburu</option>
                                <option value="Trans-Nzoia">Trans-Nzoia</option>
                                <option value="UasinGishu">UasinGishu</option>
                                <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                                <option value="Nandi">Nandi</option>
                                <option value="Baringo">Baringo</option>
                                <option value="Laikipia">Laikipia</option>
                                <option value="Nakuru">Nakuru</option>
                                <option value="Narok">Narok</option>
                                <option value="Kajiado">Kajiado</option>
                                <option value="Kericho">Kericho</option>
                                <option value="Bomet">Bomet</option>
                                <option value="Kakamega">Kakamega</option>
                                <option value="Vihiga">Vihiga</option>
                                <option value="Bungoma">Bungoma</option>
                                <option value="Busia">Busia</option>
                                <option value="Siaya">Siaya</option>
                                <option value="HomaBay">HomaBay</option>
                                <option value="Migori">Migori</option>
                                <option value="Kisii">Kisii</option>
                                <option value="Nyamira">Nyamira</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Kilifi">Kilifi</option>

                            </select>
                        </div>


                        <label for="MedicalHistory">MedicalHistory</label>
                        <textarea id="MedicalHistory" name="MedicalHistory"></textarea>

                        <label for="Vaccines">Vaccines</label>
                        <select name='Vaccines' id='Vaccines' required>
                            <option value="Diphtheria">Diphtheria</option>
                            <option value="Tetanus">Tetanus</option>
                            <option value="AcellularPertussis">Acellular Pertussis</option>
                            <option value="HepatitisB"> Hepatitis B</option>
                            <option value="Rotavirus">Rotavirus</option>
                            <option value="HaemophilusInfluenzae">Haemophilus Influenzae</option>
                            <option value="PneumococcalConjugate">Pneumococcal Conjugate</option>
                            <option value="InactivatedPoliovirus">Inactivated Poliovirus</option>
                            <option value="Influeza">Influeza</option>
                            <option value="Measles">Measles</option>
                            <option value="Mumps">Mumps</option>
                            <option value="Rubella">Rubella</option>
                            <option value="Varicella">Varicella</option>
                            <option value="HepatitisA">Hepatitis A</option>
                            <option value="PneumococcalPolysaccharide">Pneumococcal Polysaccharide</option>
                            <option value="Dengue">Dengue</option>
                            <option value="HumanPapillomavirus">Human Papillomavirus</option>
                            <option value="Meningococcal">Meningococcal</option>
                            <option value="MeningococcalB">Meningococcal B</option>
                            <option value="BCG">BCG</option>
                            <option value="Polio">Polio</option>
                            <option value="Pentavalent">Pentavalent</option>
                            <option value="Vitamins">Vitamins</option>
                            <option value="YellowFever">Yellow Fever</option>
                            <option value="Flu">Flu</option>
                            <option value="Prevenar13">Prevenar 13</option>
                            <option value="Rotarix">Rotarix</option>
                            <option value="Typhoid">Typhoid</option>
                            <option value="Dewormer">Dewormer</option>
                            <option value="IPV">IPV</option>
                            <option value="Antirabies/Verorab">Antirabies/Verorab</option>


                        </select>


                        <div class="row">
                            <div class="col" style='width:50%;'>
                                <label for="VaccinationDate">Vaccination Date</label>
                                <input type="date" name="VaccinationDate" id="VaccinationDate" required>
                            </div>

                            <div class="col" style='width:50%;'>
                                <label for="VaccinationTime">VaccinationTime</label>
                                <input type="time" name="VaccinationTime" id="VaccinationTime" required>
                            </div>
                        </div>

                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" required>

                        <div class="col" style='width:50%;'>
                            <button class="btn-cta" type="submit">Submit</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div class="col-6">
            <img class="portal-img" src="./aboutus.jpg" alt="Image details" />
        </div>
    </div>

</body>

</html>