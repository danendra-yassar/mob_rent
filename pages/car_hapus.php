<?php

$id_kendaraan = $_GET['id_kendaraan'];

$data = [
    'delete_at' => date("Y-m-d H:i:s")
];

update_data($koneksi, "tb_kendaraan", $data, $id_kendaraan, "id_kendaraan");

#redirect
redirect("?page=car_menu");