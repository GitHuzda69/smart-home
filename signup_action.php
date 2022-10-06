<?php
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if($name == ""){
    echo "Username required";
}else if ($email == "") {
    echo "Email required";
}else if ($pass == "") {
        echo "Password required";
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user", "name", "EQUAL", $email);
    $data = json_decode($retrieve, 1);

    if(isset($data['email'])){
        echo "Email already used";
    }else{
        $insert = $rdb->insert("/user", [
            "name" => $name, 
            "email" => $email,
            "pass" => $pass
        ]);

        $result = json_decode($insert, 1);
        if(isset($result['name'])){
            echo "Sign Up success, please login";
        }else{
            echo "Sign Up failed";
        }
    }
}