<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "tunzwa";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$FirstName=($_POST['FirstName']);
$Surname=($_POST['Surname']);
$MiddleName=($_POST['MiddleName']);
$DOB=($_POST['DOB']);
$Gender=($_POST['Gender']);
$HomeAddress=($_POST['HomeAddress']);
$County=($_POST['County']);
$MedicalHistory=($_POST['MedicalHistory']);
$Vaccines=($_POST['Vaccines']);
$VaccinationDate=($_POST['VaccinationDate']);
$VaccinationTime=($_POST['VaccinationTime']);
$Email=($_POST['Email']);


//now insert the received values into database using defined variables
$sqli ="INSERT INTO booking(FirstName,Surname,MiddleName,DOB,Gender,HomeAddress,County,MedicalHistory,Vaccines,VaccinationDate,VaccinationTime,Email) VALUES ('$FirstName','$Surname','$MiddleName','$DOB','$Gender','$HomeAddress','$County','$MedicalHistory','$Vaccines','$VaccinationDate','$VaccinationTime','$Email');";
if ($con->query($sqli) === TRUE) {
    echo "Booking successfull";

    header("Location: https://calendar.google.com");
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reasons
?>