

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                       <h4 class="card-title">Daftar Kendaraan</h4>
                                        <p class="card-category">Handcrafted by our friends from
                                            <div class="btn-toolbar mb-2 mb-md-0">
                                            <div class="btn-group me-2">
                                                <a href="?page=car_tambah" type="submit" class="btn btn-info btn-fill pull-right">Tambah Kendaraan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body table-full-width table-responsive">

                                <?php
                                    $sql= "SELECT * FROM tb_kendaraan WHERE delete_at IS NULL";

                                    $result = mysqli_query($koneksi,$sql);
                                ?>

                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Plat Nomer</th>
                                            <th>Nama Kendaraan</th>
                                            <th>Jenis Kendaraan</th>
                                            <th>Sewa Awal</th>
                                            <th>Sewa Akhir</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 0;
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    $no++;
                                                    echo "<tr>
                                                        <td class='text-center'>".$no."</td>
                                                        <td>".$row['plat_nomer']."</td>
                                                        <td>".$row['nama_kendaraan']."</td>
                                                        <td>".$row['jenis_kendaraan']."</td>
                                                        <td>".$row['sewa_awal']."</td>
                                                        <td>".$row['sewa_akhir']."</td>
                                                        <td>".$row['biaya']."</td>
                                                        <td>
                                                            <a href='?page=car_edit&id_kendaraan=".$row['id_kendaraan']."' class='btn btn-sm btn-info'>Edit</a>
                                                            <a href='?page=car_hapus&id_kendaraan=".$row['id_kendaraan']."' class='btn btn-danger'>Hapus</a>
                                                        </td>
                                                    </tr>";
                                                }
                                            ?>
                                        </tbody>    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>