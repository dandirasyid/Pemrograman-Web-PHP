<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center">Form Edit Mahasiswa</h3>
    <div class="container col-md-8 p-4">
        <?php echo form_open("mahasiswa/save") ?>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" value="<?php echo $obj_mahasiswa->nim ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" value="<?php echo $obj_mahasiswa->nama ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <input id="gender" name="gender" placeholder="Masukkan Jenis Kelamin Anda"  type="text" value="<?php echo $obj_mahasiswa->gender ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat lahir</label> 
                <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir Anda" type="text" value="<?php echo $obj_mahasiswa->tmp_lahir ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir Anda" type="text" value="<?php echo $obj_mahasiswa->tgl_lahir ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="ipk" class="col-4 col-form-label">IPK</label> 
                <div class="col-8">
                <input id="ipk" name="ipk" placeholder="Masukkan IPK Anda" type="text" value="<?php echo $obj_mahasiswa->ipk ?>" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        <?php echo form_close() ?>
    </div>
</body>
</html>