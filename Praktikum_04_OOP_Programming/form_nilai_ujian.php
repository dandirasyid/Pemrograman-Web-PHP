<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" style="position: fixed; top: 30%; left: 50%; transform: translate(-50%, -50%);">
        <div class="col-12 m-auto">
            <h3>Form Nilai Ujian</h3>
            <hr>
        </div>
        <form  method="POST" action="form_nilai_ujian.php">
            <div class="form-group row col-8">
              <label for="nim" class="col-4 col-form-label">NIM</label> 
              <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row col-8">
              <label for="matakuliah" class="col-4 col-form-label" name="matakuliah">Pilih MK</label> 
              <div class="col-8">
                <select id="select" name="matakuliah" class="form-select">
                  <option value="pemweb">Pemrograman Web</option>
                  <option value="jarkom">Jaringan Komputer</option>
                  <option value="basdat">Basis Data</option>
                  <option value="pkn">PPKN</option>
                  <option value="ui/ux">UI/UX</option>
                  <option value="statistik">Statistika dan Probabilitas</option>
                  <option value="bing">Bahasa Inggris</option>
                  <option value="KE">Komunikasi Efektif</option>
                </select>
              </div>
            </div>
            <div class="form-group row col-8">
              <label for="nilai" class="col-4 col-form-label">Nilai</label> 
              <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Masukkan Nilai Anda" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Simpan  </button>
              </div>
            </div>
          </form>
          <hr/>
          <?php
			      require_once "class_nilaimahasiswa.php";
			      $matakuliah = $_POST['matakuliah'];
			      $nilai = $_POST['nilai'];
			      $nim = $_POST['nim'];
			      $ujian = new nilaiMahasiswa($matakuliah, $nilai, $nim);
		      	$submit = $_POST['submit'];

			      if ($submit) {
			  	    echo 'NIM : ' . $ujian->nim;
				      echo '</br>Mata Kuliah : ' . $ujian->matakuliah;
			      	echo '</br>Nilai : ' . $ujian->nilai;
			  	    echo '</br>Hasil Ujian : ' . $ujian->grade();
				      echo '</br>Grade : ' . $ujian->hasil();
		  	    }
		    	?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>