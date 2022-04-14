<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran Account Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedheader.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
</head>
<body>
    <div class="container" >
        <table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
            <h2 style="text-align : center">Daftar Account Bank</h2>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>No. Account</th>
                    <th>Pemilik</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "class_accountBank.php";
                    $ahmad = new BankAccount("C001", 6000000, "Ahmad");
                    $budi = new BankAccount("C002", 5350000, "Budi");
                    $kurniawan = new BankAccount("C003", 2500000, "kurniawan");
                    $total = array(1 => $ahmad, $budi, $kurniawan);
                    foreach($total as $no => $value) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $value->account() . "</td>";
                        echo "<td>" . $value->customer . "</td>";
                        echo "<td>" . $value->saldo() . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <p>Ahmad nabung 1.000.000</p><br>
        <p>Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi</p><br>
        <p>Budi tarik uang 2.500.000</p>
        <table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>No. Account</th>
                    <th>Pemilik</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $ahmad ->deposit(1000000);
                    $ahmad -> transfer($budi, 1500000);
                    $budi -> withdraw (2500000);
                    $total= array (1=> $ahmad, $budi, $kurniawan);
                    foreach($total as $no => $value){
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $value->account() . "</td>";
                        echo "<td>" . $value->customer . "</td>";
                        echo "<td>" . $value->saldo() . "</td>";
                        echo "</tr>";
                    }
                ?>  
            </tbody>
        </table >
    </div>

    <script ></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>
</html>