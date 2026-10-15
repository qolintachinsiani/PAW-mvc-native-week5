<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <a href="index.php?page=buku&action=create">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($buku as $b): ?>
        <tr>
            <td><?= htmlspecialchars($b['kode_buku']) ?></td>
            <td><?= htmlspecialchars($b['judul']) ?></td>
            <td><?= htmlspecialchars($b['penulis']) ?></td>
            <td><?= htmlspecialchars($b['tahun_terbit']) ?></td>
            <td>
                <a href="index.php?page=buku&action=edit&kode_buku=<?= $b['kode_buku'] ?>">Edit</a> |
                <a href="index.php?page=buku&action=delete&kode_buku=<?= $b['kode_buku'] ?>"
                   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>