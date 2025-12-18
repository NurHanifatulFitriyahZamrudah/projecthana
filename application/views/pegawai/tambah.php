<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Tambah Pegawai</h2>

        <form method="post">

            <label>Nama</label><br>
            <input type="text" name="nama" required style="width:100%; padding:8px;"><br><br>

            <label>Email</label><br>
            <input type="email" name="email" required style="width:100%; padding:8px;"><br><br>

            <label>Bidang</label><br>
            <select name="bidang" required style="width:100%; padding:8px;">
                <option value="">-- Pilih Bidang --</option>
                <option value="Finance">Finance</option>
                <option value="Marketing">Marketing</option>
                <option value="HR">HR</option>
            </select><br><br>

            <label>Alamat</label><br>
            <textarea name="alamat" required style="width:100%; padding:8px;"></textarea><br><br>

            <button type="submit" class="btn btn-add">Simpan</button>
            <a href="<?= site_url('pegawai') ?>" class="btn btn-delete">Kembali</a>

        </form>
    </div>
</div>

</body>
</html>