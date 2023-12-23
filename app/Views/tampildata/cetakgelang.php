<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CETAK GELANG PASIEN</title>
</head>

<body>

    <div class="container mt-3">
        <a href="<?= site_url('home/index') ?>" class="btn btn-warning">Back</a>
        <h2 class="text-center my-5">GELANG PASIEN</h2>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>No. Registrasi</th>
                    <th>Alamat Kontak</th>
                    <th>Nama Kota</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Cetak</th>

                </tr>
            </thead>

            <?php $i = 1;
            foreach ($pasien as $pasien) {
            ?>

                <tbody>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td class="text-uppercase"><?= $pasien['name_of_pasien']; ?></td>
                        <td><?= $pasien['no_registration']; ?></td>
                        <td class="text-uppercase"><?= $pasien['contact_address']; ?></td>
                        <td class="text-uppercase"><?= $pasien['nama_kota']; ?></td>
                        <td><?= $pasien['date_of_birth']; ?></td>
                        <?php if ($pasien['gender'] == 1) { ?>
                            <td class="text-uppercase">Laki-laki</td>
                        <?php } else { ?>
                            <td class="text-uppercase">Perempuan</td>
                        <?php } ?>
                        <td>
                            <a href="<?= site_url('home/cetak1/' . $pasien['no_registration']) ?>" class="btn btn-warning">Cetak</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>