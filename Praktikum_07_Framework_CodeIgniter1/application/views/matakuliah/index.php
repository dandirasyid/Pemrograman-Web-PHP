<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Matakuliah</title>
</head>

<body>
    <div id="body" class="col-md-12">
        <h3>
            Daftar Matakuliah
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_mk as $mk) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>                  
                        <td><?= $mk->kode ?></td>
                        <td><?= $mk->nama ?></td>
                        <td><?= $mk->sks ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>