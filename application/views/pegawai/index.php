<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Data Pegawai</h2>

        <a href="<?= site_url('pegawai/tambah') ?>" class="btn btn-add">
            + Tambah Pegawai
        </a>

        <table>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Bidang</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($pegawai as $p): ?>
            <tr>
                <td><?= $p->nama ?></td>
                <td><?= $p->email ?></td>
                <td><?= $p->bidang ?></td>
                <td><?= $p->alamat ?></td>
                <td>
                    <a href="<?= site_url('pegawai/edit/'.$p->id) ?>" class="btn btn-edit">
                        Edit
                    </a>
                    <a href="<?= site_url('pegawai/hapus/'.$p->id) ?>" 
                       class="btn btn-delete"
                       onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>

</body>
</html>