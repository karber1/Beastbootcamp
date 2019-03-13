<?php

$comp_name = $_POST['comp_name'];
$orderer = $_POST['orderer'];
$email = $_POST['email'];
$phone_nr = $_POST['phone_nr'];
$competitors = $_POST['competitors'];
$org_nr = $_POST['org_nr'];

if (isset ($post['submit'])) {
    mysql_connect("localhost", "root", "" )
    mysql_select_db("signup_race")
    
    $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
    $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysql_real_escape_string($_FILES["image"]["type"]);

    if(substr($imageType,0,5) == "image"){

        mysql_query("INSERT INTO 'race' VALUES ('$comp_name','$orderer','$email','$phone_nr',
        '$competitors','$org_nr','$imageName','$imageData')");
    }
}

?>