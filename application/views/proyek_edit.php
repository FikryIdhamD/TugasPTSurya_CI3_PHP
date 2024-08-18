<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Proyek</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="my-4">Edit Proyek</h1>
    <form action="<?php echo base_url('index.php/ProyekController/update/' . $proyek['id']); ?>" method="POST">
        <div class="form-group">
            <label>Nama Proyek</label>
            <input type="text" class="form-control" name="namaProyek" value="<?php echo $proyek['namaProyek']; ?>" required>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input type="text" class="form-control" name="client" value="<?php echo $proyek['client']; ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="date" class="form-control" name="tglMulai" value="<?php echo $proyek['tglMulai']; ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" class="form-control" name="tglSelesai" value="<?php echo $proyek['tglSelesai']; ?>" required>
        </div>
        <div class="form-group">
            <label>Pimpinan Proyek</label>
            <input type="text" class="form-control" name="pimpinanProyek" value="<?php echo $proyek['pimpinanProyek']; ?>" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan"><?php echo $proyek['keterangan']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <select name="lokasi_id[]" multiple class="form-control">
                <?php foreach ($lokasi as $l): ?>
                    <option value="<?php echo $l['id']; ?>" 
                        <?php 
                        if (isset($proyek['lokasiList']) && is_array($proyek['lokasiList'])) {
                            foreach ($proyek['lokasiList'] as $lokasi) {
                                if ($lokasi['id'] == $l['id']) {
                                    echo 'selected';
                                    break;
                                }
                            }
                        }
                        ?>>
                        <?php echo $l['namaLokasi']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
