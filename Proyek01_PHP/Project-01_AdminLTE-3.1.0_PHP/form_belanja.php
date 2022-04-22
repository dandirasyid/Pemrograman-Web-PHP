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
						<li class="breadcrumb-item"><a href="#">Praktikum 2</a></li>
						<li class="breadcrumb-item active">form_belanja</li>
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
							<h3 class="card-title">form_belanja</h3>

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
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                                <title>Form Belanja</title>
                            </head>
                            <body>
                            <H2 style = "text-align : center;" class = "mb-5 mt-2" >Form Belanja</H2>
                            <div class = "container-fluid">
                            <div class = "row justify-content-between" >
                            <form  class="col-12 col-md-6 pb-3 pb-md-0" method="POST" action="form_belanja.php">
                                <div class="form-group row">
                                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                                    <div class="col-8">
                                    <input id="customer" name="customer" placeholder="Masukkan Nama Anda" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Pilih Produk</label> 
                                    <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-8">
                                    <input id="jumlah" name="jumlah" type="number" min = "0" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                                <div class="col-12 col-sm-8 sm-8 col-md-4">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                                        <li class="list-group-item">TV : 4.200.000</li>
                                        <li class="list-group-item">KULKAS : 3.100.000</li>
                                        <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                                        <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                                    </ul>
                                </div>
                            </div>    
                            </div>
                            
                            <?php
                                //Membuat Variabel 
                               $customer = $_POST['customer'];
                               $produk = $_POST['produk'];
                               $jumlah = $_POST['jumlah'];
                               $proses = $_POST['submit'];
                            
                                // Membuat Array
                               $barang = array("TV" => 4200000, "KULKAS" => 3100000, "MESIN CUCI" => 3800000);
                               
                                //Menampilkan Data
                               echo "Daftar Belanja";
                               echo "<br/>";  
                               echo "</br> Nama Customer : $customer";
                               echo "</br> Nama Produk : $produk";
                               echo "</br> Jumlah Produk : $jumlah";
                               
                                // IF Else
                               if (!empty($jumlah)) {
                                    echo '</br>Total Belanja : ' . $barang[$produk] * $jumlah;
                                } else {
                                    echo '</br>Total Belanja : ' . "";
                                }   
                            
                            ?>
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
