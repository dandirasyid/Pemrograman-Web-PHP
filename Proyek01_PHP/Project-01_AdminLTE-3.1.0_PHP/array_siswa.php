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
						<li class="breadcrumb-item"><a href="#">Praktikum 1</a></li>
						<li class="breadcrumb-item active">array_siswa</li>
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
							<h3 class="card-title">array_siswa</h3>

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
								<title>Array Siswa</title>
							</head>
							<body>
								<?php
									$ns1 = ['id' => 1, 'nim' => '0110221134', 'uts' => 97, 'uas' => 98, 'tugas' => 100];
									$ns2 = ['id' => 2, 'nim' => '0110221022', 'uts' => 90, 'uas' => 79, 'tugas' => 80];
									$ns3 = ['id' => 3, 'nim' => '0110221124', 'uts' => 88, 'uas' => 85, 'tugas' => 90];
									$ns4 = ['id' => 4, 'nim' => '0110221142', 'uts' => 78, 'uas' => 75, 'tugas' => 92];
							
									$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
								?>
								<h3>Daftar Nilai Siswa</h3>
								<div class="table-responsive">
									<table border= "1" width = "100%">
										<thead>
											<tr>
												<th>No</th><th>NIM</th><th>UTS</th>
												<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$nomer = 1;
												foreach ($ar_nilai as $ns){
													echo '<tr><td>'. $nomer. '</td>';
													echo '<td>'. $ns['nim']. '</td>';
													echo '<td>'. $ns['uts']. '</td>';
													echo '<td>'. $ns['uas']. '</td>';
													echo '<td>'. $ns['tugas']. '</td>';
													$nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
													echo '<td>'. number_format($nilai_akhir,2,',','.'). '</td>';
													echo '<tr/>';
													$nomer++;
												}
											?>
										</tbody>
									</table>									
								</div>
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