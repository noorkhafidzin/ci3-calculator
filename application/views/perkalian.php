<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h1>PERKALIAN</h1>
<form method="post" action="<?php echo base_url('perkalian/kali') ?>" class="form-control">
<label for="bil1">Masukkan Angka Pertama :</label>			
	<input type="text" name="bil1" id="bil1" class="form-control" autocomplete="off">
	
	<label for="bil2">
		Masukkan Angka Kedua : 
	</label>
	
	<input type="text" name="bil2" id="bil2" class="form-control" autocomplete="off">
	
	<select class="form-control" name="operasi">
	<option value="kali">x</option>
	</select>
	<input type="submit" name="hitung" value="Hitung" class="btn btn-primary">									
</form>
</div>
</div>
</div>
</div>
</div>
<?php
if (!empty($hasil)):?>
<div class = "container">
	<div class= "col-md-15">
<h3> Hasilnya adalah : </h3>
<h3><?php echo $hasil ?></h3>
</div>
</div>
<?php endif ?>

</body>
</html>
