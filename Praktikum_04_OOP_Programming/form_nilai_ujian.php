<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Form Nilai Ujian</title>
</head>

<body >
	<div class="container-fluid" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
		<div class="col-12 col-md-6 m-auto">
			<h3 class="text-center">Form Nilai Ujian</h3>
			<hr class="featurette-divider mx-auto">
			<form class="form-horizontal" method="POST" action="form_nilai_ujian.php">
				<div class="form-group row">
					<label for="nim" class="col-4 col-form-label text-end">NIM</label>
					<div class="col-8">
						<div class="input-group mb-3">
							<input id="nim" name="nim" type="text" class="form-control" value="" placeholder="NIM" aria-label="NIM" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="matakuliah" class="col-4 col-form-label text-end">Mata Kuliah</label>
					<div class="col-8">
						<div class="input-group mb-3">
							<select class="form-select" aria-label="Mata Kuliah" name="matakuliah">
								<option selected value="" class="text-muted">Pilih Mata Kuliah</option>
								<option value="PPKN">PPKN</option>
								<option value="Komuikasi Efektif">Komuikasi Efektif</option>
								<option value="Pemrograman Web 2">Pemrograman Web 2</option>
								<option value="Basis Data">Basis Data</option>
								<option value="Jaringan Komputer">Jaringan Komputer</option>
								<option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
								<option value="UI/ UX">UI/UX</option>
								<option value="Bahasa Inggris">Bahasa Inggris</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="nilai" class="col-4 col-form-label text-end">Nilai</label>
					<div class="col-4">
						<div class="input-group mb-3">
							<input id="nilai" name="nilai" type="number" class="form-control" value="" min="0" max="100" placeholder="Nilai" aria-label="Nilai" aria-describedby="basic-addon2">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
						<input type="submit" class="btn btn-success" value="Submit" name="submit">
					</div>
				</div>
			</form>
			<hr>
			<?php
			require_once "class_nilaimahasiswa.php";
			$submit = $_POST['submit'];
			$nim = $_POST['nim'];
			$matakuliah = $_POST['matakuliah'];
			$nilai = $_POST['nilai'];
			$ujian = new nilaiMahasiswa($matakuliah, $nilai, $nim);

			if (!empty($submit)) {
				echo 'NIM : ' . $ujian->nim;
				echo '</br>Mata Kuliah : ' . $ujian->matakuliah;
				echo '</br>Nilai : ' . $ujian->nilai;
				echo '</br>Hasil Ujian : ' . $ujian->grade();
				echo '</br>Grade : ' . $ujian->hasil();
			}
			?>
		</div>
	</div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>