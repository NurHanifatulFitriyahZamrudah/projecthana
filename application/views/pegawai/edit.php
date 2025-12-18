<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Edit Pegawai</h2>

        <form method="post">

            <label>Nama</label><br>
            <input type="text" name="nama" 
                   value="<?= $pegawai->nama ?>" 
                   required style="width:100%; padding:8px;"><br><br>

            <label>Email</label><br>
            <input type="email" name="email" 
                   value="<?= $pegawai->email ?>" 
                   required style="width:100%; padding:8px;"><br><br>

            <label>Bidang</label><br>
            <select name="bidang" required style="width:100%; padding:8px;">
                <option value="Finance" <?= $pegawai->bidang == 'Finance' ? 'selected' : '' ?>>Finance</option>
                <option value="Marketing" <?= $pegawai->bidang == 'Marketing' ? 'selected' : '' ?>>Marketing</option>
                <option value="HR" <?= $pegawai->bidang == 'HR' ? 'selected' : '' ?>>HR</option>
            </select><br><br>

            <label>Alamat</label><br>
            <textarea name="alamat" required style="width:100%; padding:8px;"><?= $pegawai->alamat ?></textarea><br><br>

            <button type="submit" class="btn btn-edit">Update</button>
            <a href="<?= site_url('pegawai') ?>" class="btn btn-delete">Kembali</a>

        </form>
    </div>
</div>

</body>
</html>