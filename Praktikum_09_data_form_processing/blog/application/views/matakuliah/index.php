<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if(confirm(pesan)){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="col-md-12">
    <h3>Matakuliah</h3>
    <table border ="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach ($matakuliah as $mk) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $mk->nama?></td>
                <td><?php echo $mk->sks?></td>
                <td><?php echo $mk->kode?></td>
                <td>
                    <a href="<?php echo base_url("index.php/matakuliah/edit/$mk->id") ?>" class="btn btn-success btn-sm active">Edit</a>
                    &nbsp;
                    <a href="<?php echo base_url("index.php/matakuliah/delete/$mk->id") ?>" onclick="return hapusMatakuliah('Anda Yakin ingin Menghapus Matakuliah Bernama <?php echo $mk->nama?> ?')" class="btn btn-danger btn-sm active">Hapus</a>
                </td>
            </tr>
            <?php
                $nomor++;
            }          
            ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("index.php/matakuliah/form") ?>"  class="btn btn-primary btn-sm active">Tambah</a>
    </div>
</body>
</html>