<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Program Studi Teknik Informatika</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="ti.php">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum 4</a></li>
						<li class="breadcrumb-item active">daftar_mahasiswa</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">daftar_mahasiswa</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Daftar Mahasiswa</title>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                                <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
                                <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
                            </head>
                            <body>
                                <div class="container table-responsive" >
                                    <table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NIM</th>
                                                <th>NAMA</th>
                                                <th>Prodi</th>
                                                <th>Thn Angkatan</th>
                                                <th>IPK</th>
                                                <th>Predikat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require_once "class_mahasiswa.php";
                                                $mahasiswa_1 =  new Mahasiswa("02011", "Faiz Fikri");
                                                $mahasiswa_2 =  new Mahasiswa("02012", "Alissa Khairunisa");
                                                $mahasiswa_3 =  new Mahasiswa("01011", "Rosalie Naurah");
                                                $mahasiswa_4 =  new Mahasiswa("01012", "Defghi Muhammad");
                                                $totalMahasiswa = array(1=>
                                                    array("nim" => $mahasiswa_1->nim, "nama" => $mahasiswa_1->nama, "prodi" => $mahasiswa_1->prodi = "TI", "angkatan" => $mahasiswa_1->thn_angkatan = 2012, "ipk" => $mahasiswa_1->ipk = 3.8, "predikat" => $mahasiswa_1->predikat_ipk()),
                                                    array("nim" => $mahasiswa_2->nim, "nama" => $mahasiswa_2->nama, "prodi" => $mahasiswa_2->prodi = "TI", "angkatan" => $mahasiswa_2->thn_angkatan = 2012, "ipk" => $mahasiswa_2->ipk = 3.9, "predikat" => $mahasiswa_2->predikat_ipk()),
                                                    array("nim" => $mahasiswa_3->nim, "nama" => $mahasiswa_3->nama, "prodi" => $mahasiswa_3->prodi = "SI", "angkatan" => $mahasiswa_3->thn_angkatan = 2010, "ipk" => $mahasiswa_3->ipk = 3.46, "predikat" => $mahasiswa_3->predikat_ipk()),
                                                    array("nim" => $mahasiswa_4->nim, "nama" => $mahasiswa_4->nama, "prodi" => $mahasiswa_4->prodi = "SI", "angkatan" => $mahasiswa_4->thn_angkatan = 2010, "ipk" => $mahasiswa_4->ipk = 3.2, "predikat" => $mahasiswa_4->predikat_ipk())
                                                );
                                                foreach ($totalMahasiswa as $no => $value) {
                                                    echo "<tr>";
                                                    echo "<td>" . $no . "</td>";
                                                    echo "<td>" . $value["nim"] . "</td>";
                                                    echo "<td>" . $value["nama"] . "</td>";
                                                    echo "<td>" . $value["prodi"] . "</td>";
                                                    echo "<td>" . $value["angkatan"] . "</td>";
                                                    echo "<td>" . $value["ipk"] . "</td>";
                                                    echo "<td>" . $value["predikat"] . "</td>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                            
                                </div>
                                
                                <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
                                <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
                                <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var table = $('#example').DataTable({
                                            responsive: true
                                        });
                            
                                        new $.fn.dataTable.FixedHeader(table);
                                    });
                                </script>
                            </body>
                            </html>						
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>