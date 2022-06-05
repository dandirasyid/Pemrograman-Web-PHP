<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dosen1->id?></td>
                <td><?php echo $dosen1->nama?></td>
                <td><?php echo $dosen1->gender?></td>
                <td><?php echo $dosen1->tmp_lahir?></td>
                <td><?php echo $dosen1->tgl_lahir?></td>
                <td><?php echo $dosen1->nidn?></td>
                <td><?php echo $dosen1->pendidikan?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>