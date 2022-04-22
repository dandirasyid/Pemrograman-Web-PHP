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
						<li class="breadcrumb-item"><a href="#">Praktikum 3</a></li>
						<li class="breadcrumb-item active">nilai_siswa</li>
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
							<h3 class="card-title">nilai_siswa</h3>

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
                            <?php
                                require_once 'lib_fungsi.php';
                                // Membuat Variabel
                                $proses = $_POST['proses'];
                                $nama_siswa = $_POST['nama'];
                                $mata_kuliah = $_POST['matkul'];
                                $uts = $_POST['nilai_uts'];
                                $uas = $_POST['nilai_uas'];
                                $tugas = $_POST['nilai_tugas'];
                                $total = $uts + $uas + $tugas;
                                $_nilai = $total/3;
                                $hasil_ujian = kelulusan($_nilai);
                                $peringkat = grade($_nilai);
                                // menampilkan data

                                echo "Nama : $nama_siswa";
                                echo "<br/>Mata Kuliah : $mata_kuliah";
                                echo "<br/>Nilai UTS : $uts";
                                echo "<br/>Nilai UAS : $uas";
                                echo "<br/>Nilai Tugas : $tugas";
                                echo "<br/>Grade: $peringkat";
                                echo "<br/>Keterangan : $hasil_ujian";
                                echo "<br/>Proses : $proses";
                            ?>						
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