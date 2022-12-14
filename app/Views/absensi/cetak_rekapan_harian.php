<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
</head>

<body>
    <div id="container">
        <h1>Welcome to CodeIgniter!</h1>
        <div id="body">
            <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en"> -->

<head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link href="http://localhost/smansamalaka/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container">
        <table class="table table-borderless">
            <tr>
                <td style="width: 15%;"><img height="75px" src="http://localhost/smansamalaka/public/assets/img/logo-ntt.jpg" alt="" class="img-fluid"></td>

                <td>
                    <center>
                        <b class="text-danger">PEMERINTAH PROVINSI NUSA TENGGARA TIMUR</b><br>
                        <b>DINAS PENDIDIKAN DAN KEBUDAYAAN KABUPATEN MALAKA</b><br>
                        <b>SMA NEGERI 1 MALAKA BARAT</b><br>
                        <b>JL. MAROERAI - BESIKAMA, 85763</b><br>
                        <b>email : smansamalbar@gmail.com</b>
                    </center>


                </td>
                <td style="width: 15%;"><img height="75px" src="http://localhost/smansamalaka/public/assets/img/logo-sekolah.jpg" alt="" class="img-fluid"></td>
            </tr>
        </table>
        <hr>
        <center>
            <h4 class="text-align-center">ABSENSI</h4>
        </center>
        <!-- End Tooltips Examples -->
        <p>Kelas : <?= $kelas->kelas_tingkat ?> <?= $kelas->jurusan_nama ?> <?= $kelas->kelas_abjad ?></p>
        <p>Tanggal : <?= $absensi->absensi_tgl ?></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th style="width: 20%;">Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data_absensi as $absen) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $absen->siswa_nama ?></td>
                        <td><?= $absen->detailabsensi_kehadiran ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- Vaidasi -->

    <table class="table table-borderless">
        <tr>
            <td style="width: 50%;"></td>
            <td>
                <div class="text-center">
                    <span class="text-center">Malaka Barat, <?= date('d-m-Y') ?></span><br>
                    <span class="text-center">Guru Wali Kelas,</span> <br><br><br>
                    <span class="text-center"><?= $kelas->guru_nama ?></span><br>
                    <span class="text-center">NIP.<?= $kelas->guru_nip ?></span>
                </div>
            </td>
        </tr>
    </table>

</body>

</html>