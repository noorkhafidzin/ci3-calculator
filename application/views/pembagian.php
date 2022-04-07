<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Kalkulator - Pembagian</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <p>PEMBAGIAN</p>
                    </div>

                    <div class="card-body">
                        <div class="col-8">
                            <form action="<?php echo base_url('pembagian/jBagi'); ?>" method="POST">
                                <label>Angka Pertama</label>
                                <input type="bilangan1" name="bilangan1" id="bilangan1">
                                <label>Angka Kedua</label>
                                <input type="bilangan2" id="bilangan2" name="bilangan2">
                                <input type="submit" value="Submit">
                            </form>
                        </div>

                        <div class="col-md-4">
                            <?php if (!empty($hasil)) : ?>
                                <div class="card">
                                    <div class="card-header">
                                        Hasil
                                    </div>
                                    <div class="card-body">
                                        <h5>Hasil Pembagian</h5>
                                        <h3><?= $hasil ?></h3>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>