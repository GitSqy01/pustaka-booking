<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$judul.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Anggota Perpustakaan Online</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col" nowrap>Member Sejak</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($anggota as $a) {
        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                <td>
                    <picture>
                        <source srcset="" type="image/svg+xml">
                        <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                    </picture>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>