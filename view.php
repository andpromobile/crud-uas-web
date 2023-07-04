<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM authors ORDER BY id DESC";
    $sql = mysqli_query($con, $query);

    if($sql){
        $result = array();

        while($row = mysqli_fetch_array($sql)){
            array_push($result, array(
                'id' => $row['id'],
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'email' => $row['email'],
            ));
        }

        echo json_encode($result);
    }


?>