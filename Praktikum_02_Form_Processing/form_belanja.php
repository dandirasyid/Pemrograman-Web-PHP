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
<H2 style = "text-align : center;" >Form Belanja</H2>
<div class = "container">
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
        <input id="jumlah" name="jumlah" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>
</body>
</html>