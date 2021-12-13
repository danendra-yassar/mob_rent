            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Status Kendaraan</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>

                                <div class="card-body table-full-width table-responsive">

                                <?php
                                    $sql= "SELECT * FROM tb_kendaraan";

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
                                            <th>Status Sewa</th>
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
                                                        <td>".$row['id_status']."</td>
                                                        <td><a href='?page=car_edit_status&id_kendaraan=".$row['id_kendaraan']."' class='btn btn-sm btn-info'>Edit</a></td>
                                                    </tr>";
                                                }
                                            ?>
                                        </tbody>    
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">Table on Plain Background</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr><th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                            <th>City</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>