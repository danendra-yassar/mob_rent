<head>
	<link rel="stylesheet" href="http://code.jquery.com/ ui/ 1.10.3/ themes/ smoothness/ jquery-ui.css" type="text/css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<script>
        $(function() {
            $("#date").datepicker({
                autoclose:true,
                todayHighlight:true,
                format:'yyyy-mm-dd',
                language: 'id'
            });
        });
    </script>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Kendaraan</h4>
                                </div>
                                <div class="card-body">
                                    <form action="?page=car_simpan" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Plat Nomer Kendaraan</label>
                                                    <input type="text" class="form-control" name="plat_nomer">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Kendaraan</label>
                                                    <input type="text" class="form-control" name="nama_kendaraan" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Jenis Kendaraan</label>
                                                    <input type="text" class="form-control" name="jenis_kendaraan" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tanggal Sewa Awal</label>
                                                    <input type="date" class="form-control" name="sewa_awal" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tanggal Sewa Akhir</label>
                                                    <input type="date" class="form-control" name="sewa_akhir" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Biaya</label>
                                                    <input type="text" class="form-control" name="biaya" >
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" value="Simpan Data" class="btn btn-info btn-fill pull-right">Sumbit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>