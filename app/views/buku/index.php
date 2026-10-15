<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <a href="index.php?page=buku&action=create">Tambah Data</a>
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
                <a href="index.php?page=buku&action=edit&kode_buku=<?= $b['kode_buku'] ?>">Edit</a>
                <form method="post" action="index.php?page=buku&action=delete" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                    <input type="hidden" name="kode_buku" value="<?= $b['kode_buku'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>