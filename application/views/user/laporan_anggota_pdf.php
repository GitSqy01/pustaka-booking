<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Laporan Data Anggota Perputakaan Online</center>
    </h3>
    <br />
    <?php
    $tglcetak = date('y-m-d');
    echo "<div align='right'> Tanggal Cetak : $tglcetak </div>";
    ?>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col" nowrap>Member Sejak</th>
                <th scope="col">Image</th>
        </thead>
        <tbody>


            <?php
            $genap = "#CCCCCC";
            $ganjil = "#3D9E2A";
            $no = 1;
            foreach ($anggota as $u) {
                if ($no % 2 == 0) {
                    $warna = $genap;
                } else {
                    $warna = $ganjil;
                }
                echo "<tr bgcolor = '$warna'>";
            ?>

                <th scope="row"><?= $no++; ?></th>
                <td><?= $u['nama']; ?></td>
                <td><?= $u['email']; ?></td>
                <td><?= date('d F Y', $u['tanggal_input']); ?></td>
                <td>
                    <picture>
                        <source srcset="" type="image/svg+xml/png/jpg.jpeg">
                        <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                    </picture>
                </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>

</body>

</html>