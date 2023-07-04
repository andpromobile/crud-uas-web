<?php

    require_once('koneksi.php');

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];



    $query = "INSERT INTO authors (first_name, last_name, email) values ('$first_name', '$last_name', '$email')";
    $sql = mysqli_query($con, $query);

    if($sql){
        echo json_encode(array('message' => 'Data Berhasil Disimpan'));
    }else{
            echo json_encode(array('message' => 'Error'));
    }


?>