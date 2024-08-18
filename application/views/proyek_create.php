<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Proyek</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="my-4">Tambah Proyek</h1>
    <form action="<?php echo base_url('index.php/ProyekController/store'); ?>" method="POST">
        <div class="form-group">
            <label>Nama Proyek</label>
            <input type="text" class="form-control" name="namaProyek" required>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input type="text" class="form-control" name="client" required>
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="datetime-local" class="form-control" name="tglMulai" required>
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="datetime-local" class="form-control" name="tglSelesai" required>
        </div>
        <div class="form-group">
            <label>Pimpinan Proyek</label>
            <input type="text" class="form-control" name="pimpinanProyek" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan"></textarea>
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <select name="lokasi_id[]" multiple class="form-control">
                <?php foreach ($lokasi as $l): ?>
                    <option value="<?php echo $l['id']; ?>"><?php echo $l['namaLokasi']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</body>
</html>
