<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Proyek dan Lokasi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="my-4">Daftar Proyek</h1>
    <a href="<?php echo base_url('index.php/ProyekController/create'); ?>" class="btn btn-primary mb-3">Tambah Proyek</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Proyek</th>
                <th>Client</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Pimpinan Proyek</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyek as $p): ?>
                <tr>
                    <td><?php echo $p['id']; ?></td>
                    <td><?php echo $p['namaProyek']; ?></td>
                    <td><?php echo $p['client']; ?></td>
                    <td><?php echo $p['tglMulai']; ?></td>
                    <td><?php echo $p['tglSelesai']; ?></td>
                    <td><?php echo $p['pimpinanProyek']; ?></td>
                    <td>
                        <?php 
                        $lokasiNames = [];
                        foreach ($p['lokasiList'] as $lokasi) {
                            $lokasiNames[] = $lokasi['namaLokasi'];
                        }
                        echo implode(', ', $lokasiNames);
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url('index.php/ProyekController/edit/' . $p['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo base_url('index.php/ProyekController/delete/' . $p['id']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
