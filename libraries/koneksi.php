<?php

    $host = "localhost"; //127.0.0.1
    $username = "root";
    $password = "1";
    $db = "mob_rent";

    $koneksi = mysqli_connect($host,$username,$password,$db,3306);

    if($koneksi == false)
    {
        // Jika gagal koneksi
        die("Error to connect database" .mysqli_connect_error());
    }