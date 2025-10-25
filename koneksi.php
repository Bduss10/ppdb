<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '101205@99';
    $db   = 'db_ppdb';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Error : ' .mysql_connect_error($conn);
    }

    $main_url = "http://localhost/ppdb-web/";

?>