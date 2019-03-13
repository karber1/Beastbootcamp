
<?php

include_once 'connect.php';

//Deklarar ut variabler för namnen i formuläret och stoppar in de i databasen

$comp_name = $_POST['comp_name'];
$orderer = $_POST['orderer'];
$email = $_POST['email'];
$phone_nr = $_POST['phone_nr'];
$competitors = $_POST['competitors'];
$org_nr = $_POST['org_nr'];
$img = $_post['img'];

 

$sql = "INSERT INTO race (comp_name, orderer, email, phone_nr, competitors, org_nr, img)
VALUES ('$comp_name', '$orderer', '$email', '$phone_nr', '$competitors', '$org_nr', '$img');";

mysqli_query($con, $sql);

HEADER("location: race.php?submit=Success");


?>

