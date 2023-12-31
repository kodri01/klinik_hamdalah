<!DOCTYPE html>
<base href="<?= base_url(); ?>">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0567264f5f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Klinik Hamdalah</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="background-color: #0a4275;">
    <div class="container">
        <a class="navbar-brand" href="vaksin_klinik/beranda"><img
                src="https://img.icons8.com/ios-filled/28/ffffff/heart-health.png" />&nbsp;&nbsp;Klinik Hamdalah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav " style="margin-left: 47rem; width:max-content;">
                <li class="nav-item">
                    <a class="nav-link" href="vaksin_klinik/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="vaksin_klinik/data_pasien">Data Pasien</a>
                </li>
                <li class=" nav-item dropdown ">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        Vaksinasi Anak
                    </a>
                    <ul style="min-width:150px;" class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item">
                            <a class="dropdown-item" href="vaksin_klinik/skrining">Skrining</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="vaksin_klinik/vaksin_anak">Vaksinasi</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vaksin_klinik/vaksinasi">Vaksin Covid-19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vaksin_klinik/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-20">
                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="container-fluid">
                                        <!-- Page Heading -->
                                        <a href="<?= base_url('vaksin_klinik/register')  ?>"
                                            class="btn btn-primary mb-2"><i class="fa-solid fa-folder-plus"></i>
                                            Tambah
                                            Data</a>
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="fw-bold ">Data Pasien Vaksin</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">

                                                    <table class="table table-bordered" id="dataTable" cellspacing="1">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center" width="4%">No</th>
                                                                <th class="text-center" width="15%">Nama Lengkap</th>
                                                                <th class="text-center" width="10%">No KTP</th>
                                                                <th class="text-center" width="15%">Tanggal Lahir
                                                                </th>
                                                                <th class="text-center" width="5%">Umur</th>
                                                                <th class="text-center" width="5%">Telepon</th>
                                                                <th class="text-center" width="15%">Jenis Kelamin
                                                                </th>
                                                                <th class="text-center" width="10%">Alamat</th>
                                                                <th class="text-center" width="15%">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            $nomor = 1;
                                                            foreach ($pasien as $s) { ?>
                                                            <tr>
                                                                <td><?= $nomor++; ?></td>
                                                                <td><?= $s->nama; ?></td>
                                                                <td><?= $s->no_nik; ?></td>
                                                                <td><?= $s->tgl_lahir; ?></td>
                                                                <td><?= $s->umur; ?></td>
                                                                <td><?= $s->no_telp; ?></td>
                                                                <td><?= $s->jenis_kelamin; ?></td>
                                                                <td><?= $s->alamat; ?></td>
                                                                <td align="center" width="15%">
                                                                    <a href="<?php echo site_url('vaksin_klinik/ubah_data/' . $s->no_nik); ?>"
                                                                        class="btn btn-success btn-sm"><i
                                                                            class="fa-solid fa-pencil"></i></a>
                                                                    <a href="<?php echo site_url('vaksin_klinik/delete/' . $s->no_nik); ?>"
                                                                        class="btn btn-danger btn-sm"><i
                                                                            class="fa-solid fa-trash"
                                                                            style="font-size:16px;"></i></a>

                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>

</script>


</body>

</html>