<?php
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];


if($name == ""){
    echo "Username required";
}else if ($pass == "") {
    echo "Password required";
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieve, 1);
    $arrkey = array_keys($data);

    for ($i=0; $i <= count($arrkey) - 1; $i++) { 
        $id = array_keys($data)[$i];
        if ($data[$id]['pass'] == $pass) {
            $_SESSION['user'] = $data[$id];
            header("Location: index.php");
        }
    }
    echo "Login failed";
}