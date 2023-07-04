<?php

    require_once('koneksi.php');
    parse_str(file_get_contents('php://input'), $value)

    $id = $value["id"];
    $first_name = $value["first_name"];
    $last_name = $value["last_name"];
    $email = $value["email"];



    $query = "UPDATE authors 
                SET first_name = '$first_name', last_name = '$last_name', email = '$email' 
                    WHERE id = '$id'";
    $sql = mysqli_query($con, $query);

    if($sql){
        echo json_encode(array('message' => 'Data Berhasil Diubah'));
    }else{
            echo json_encode(array('message' => 'Error'));
    }


?>