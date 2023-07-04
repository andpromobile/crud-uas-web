<?php

    require_once('koneksi.php');
    parse_str(file_get_contents('php://input'), $value)

    $id = $value["id"];


    $query = "DELETE FROM authors WHERE id = '$id'";
    $sql = mysqli_query($con, $query);

    if($sql){
        echo json_encode(array('message' => 'Data Berhasil Dihapus'));
    }else{
            echo json_encode(array('message' => 'Error'));
    }


?>