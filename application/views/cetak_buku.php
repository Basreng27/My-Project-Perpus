<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='<?= base_url('assets/vendor/pdf/bootstrap.min.css') ?>'>
    <link href='<?= base_url('assets/vendor/pdf/jquery.min.js') ?>'>
    <link href='<?= base_url('assets/vendor/pdf/popper.min.js') ?>'>
    <link href='<?= base_url('assets/vendor/pdf/bootstrap.min.js') ?>'>

    <style>
        .huruf {
            line-height: 1px;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
            grid-gap: 10px;
            background-color: #2196F3;
            padding: 10px;
        }

        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }

        .item1 {
            grid-row: 1 / 4;
        }
    </style>

    <title><?= $title_pdf; ?></title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4" style="text-align:center">
                <p>
                <h4 class="huruf">PEMERINTAHAN KOTA BANDUNG</h4>
                <h4 class="huruf">DINAS PENDIDIKAN</h4>
                <h2 class="huruf">SDN 234 SALUYU</h2>
                <h4 class="huruf">NPSN : 20245262 </h4>
                <h4 class="huruf">JL. CIMUNCANG DALAM NO.52</h4>

                <hr />
            </div>
            <div class="col-sm-8" style="text-align:center">
                <h5 class="huruf">Laporan Perpustakaan SDN 234 SALUYU Kota Bandung</h5>
                <h6 class="huruf">Laporan Daftar Buku</h6>
            </div>
        </div>
    </div>
    <table id="table" class="table table-bordered">
        <thead>
            <tr>
                <th>ISBN Number</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Kelas</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($content->result_array() as $list) : ?>
                <tr>
                    <td><?= $list['isbn'] ?></td>
                    <td><?= $list['judul'] ?></td>
                    <td><?= $list['pengarang'] ?></td>
                    <td><?= $list['penerbit'] ?></td>
                    <td><?= $list['kategori'] ?></td>
                    <td><?= $list['kelas'] ?></td>
                    <td><?= $list['tahun'] ?></td>
                    <td><?= $list['stok'] ?></td>
                    <td><?= $list['jumlah'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <br>
    <div style="text-align:right">Bandung <?php echo date('Y-m-d', strtotime(date('m/d/y'))); ?></div>
    <br>
    <br>
    <br>
    <br>
    <div style="text-align: right;"> Petugas Perpustakaan</div>
</body>

</html>