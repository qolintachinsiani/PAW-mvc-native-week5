<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form method="post" action="index.php?page=buku&action=update">
        <input type="hidden" name="id" value="<?= $buku['id'] ?>">
        
        <label>Kode Buku</label><br>
        <input type="text" name="kode_buku" value="<?= htmlspecialchars($buku['kode_buku']) ?>" required><br><br>
        
        <label>Judul</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br><br>
        
        <label>Penulis</label><br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br><br>
        
        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($buku['tahun_terbit']) ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php?page=buku">Kembali</a>
    </form>
</body>
</html>