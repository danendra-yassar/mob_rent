<?php

$data = [
    'plat_nomer' => clean_data($_POST['plat_nomer']),
    'nama_kendaraan' => clean_data($_POST['nama_kendaraan']),
    'jenis_kendaraan' => clean_data($_POST['jenis_kendaraan']),
    'sewa_awal' => clean_data($_POST['sewa_awal']),
    'sewa_akhir' => clean_data($_POST['sewa_akhir']),
    'biaya' => clean_data($_POST['biaya']), 
    'id_status' => clean_data($_POST['id_status']),    
];

$id_kendaraan = clean_data($_POST['id_kendaraan']);

#insert into
save_data($koneksi, "tb_kendaraan", $data, $id_kendaraan, "id_kendaraan");

// #redirect
// redirect("?page=car_status");