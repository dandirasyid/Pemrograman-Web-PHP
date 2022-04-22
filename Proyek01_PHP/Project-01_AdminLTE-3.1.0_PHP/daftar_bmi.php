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
						<li class="breadcrumb-item"><a href="#">Proyek 1</a></li>
						<li class="breadcrumb-item active">daftar_bmi</li>
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
							<h3 class="card-title">daftar_bmi</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body" style="background-image: url('assets/background-01.jpg'); height: 100%;">
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                                <title>Daftar BMI</title>
                            </head>
                            <body>
                                <div class="container-fluid py-3">
                                    <div class="container d-flex justify-content-center py-5">
                                        <div class="col-md-8 col-12 p-3 rounded-3 bg-white shadow">
                                            <h2 style="text-align: center;">Daftar BMI</h2>
                                            <form action="hasil_BMI.php" method="post">
                                                <div class="form-group row">
                                                    <label for="nama" class="col-4 col-form-label text-right">Nama</label> 
                                                    <div class="col-8">
                                                    <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tmp_lahir" class="col-4 col-form-label text-right ">Tempat Lahir</label> 
                                                    <div class="col-8">
                                                    <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir Anda" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tgl_lahir" class="col-4 col-form-label text-right">Tanggal Lahir</label> 
                                                    <div class="col-8">
                                                    <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-4 col-form-label text-right">Email</label> 
                                                    <div class="col-8">
                                                    <input id="email" name="email" placeholder="Masukkan Email Anda" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-4 text-right">Jenis Kelamin</label> 
                                                    <div class="col-8">
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="gender" id="radio_0" type="radio" checked class="custom-control-input" value="L" required> 
                                                        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                                                      </div>
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P"> 
                                                        <label for="radio_1" class="custom-control-label">Perempuan</label>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="berat" class="col-4 col-form-label text-right">Berat Badan</label> 
                                                    <div class="col-8">
                                                    <input id="berat" name="berat" placeholder="kg" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tinggi" class="col-4 col-form-label text-right">TInggi Badan</label> 
                                                    <div class="col-8">
                                                    <input id="tinggi" name="tinggi" placeholder="cm" type="text" class="form-control" required>
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <div class="col-auto m-auto">
                                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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