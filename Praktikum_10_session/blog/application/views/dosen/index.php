<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<?php
    $username = $this->session->userdata('username');
    if ($username){
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
<script>
      function hapusDosen(pesan){
            if(confirm(pesan)){
                return true;
            }else{
                return false;
            }
        }
</script>
<body>
    <div class="col-md-12">
    <h3 class="text-center">Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach ($dosen as $dsn) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $dsn->nama?></td>
                <td><?php echo $dsn->nidn?></td>
                <td><?php echo $dsn->pendidikan?></td>
                <td>
                    <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id")?>" class="btn btn-primary btn-sm active" >Detail</a>
                    &nbsp;
                    <a href="<?php echo base_url("index.php/dosen/edit/$dsn->id") ?>" class="btn btn-success btn-sm active">Edit</a>
                    &nbsp;
                    <a href="<?php echo base_url("index.php/dosen/delete/$dsn->id") ?>" class="btn btn-danger btn-sm active" onclick="return hapusDosen('Anda Yakin Menghapus Dosen Bernama <?php echo $dsn->nama ?>?')">Hapus</a>
                </td>
            </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("index.php/dosen/form") ?>" class="btn btn-primary btn-sm active" >Tambah</a>

    </div>
</body>
</html>