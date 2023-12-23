<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container container-fluid fixed">
        <div class="row align-items-center mt-5">

            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('home/tampil1') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Cetak Gelang Pasien <br><br></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('home/tampil2') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Print Label Pasien <br><br></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('home/tampil3') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Cetak SURAT ELIGIBILITAS PESERTA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>