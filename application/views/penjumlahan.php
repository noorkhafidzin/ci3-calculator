<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Penjumlahan</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Penjumlahan</h1>
            </div>
            <div class="col-md-8">
                <form action="<?php echo base_url('penjumlahan/jumlah') ?>" method="post" class="form-control">
                    <label for="angka1">Masukkan Angka pertama :</label>
                    <input type="number" name="angka1" id="angka1" class="form-control" required>
                    <label for="angka2">Masukkan Angka kedua :</label>
                    <input type="number" name="angka2" id="angka2" class="form-control" required>
                    <input class="btn btn-primary mt-2" type="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-4">
                <?php if (!empty($hasil)) : ?>
                    <div class="card">
                        <div class="card-header">
                            Hasil
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Hasil Penjumlahan</h5>
                            <p class="card-text"><?= $hasil ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>