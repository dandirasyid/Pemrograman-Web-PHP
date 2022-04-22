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
						<li class="breadcrumb-item active">lib_fungsi</li>
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
							<h3 class="card-title">lib_fungsi</h3>

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
                                function kelulusan ($_nilai){
                                    if ($_nilai > 55){
                                        return 'ANDA LULUS';
                                    }else{
                                        return 'ANDA TIDAK LULUS';
                                    }
                                }
                                function grade ($_nilai){
                                    if ($_nilai >= 85){
                                        return "A";
                                    }elseif($_nilai >=70){
                                        return "B";
                                    }elseif($_nilai >=56){
                                        return "C";
                                    }elseif($_nilai >=36){
                                        return "D";
                                    }elseif($_nilai >=10){
                                        return "E";
                                    }else{
                                        return "Tidak ada Nilai";
                                    }
                                }
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