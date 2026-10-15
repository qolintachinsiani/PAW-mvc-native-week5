<?php
class Buku
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, kode_buku, judul, penulis, tahun_terbit FROM buku ORDER BY judul'
        );
        return $stmt->fetchAll();
    }

    public function findById(int $id): array | false
    {
        $stmt = $this->db->prepare(
            'SELECT id, kode_buku, judul, penulis, tahun_terbit FROM buku WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function findByKodeBuku(string $kode_buku): array | false
    {
        $stmt = $this->db->prepare(
            'SELECT id, kode_buku, judul, penulis, tahun_terbit FROM buku WHERE kode_buku = :kode_buku'
        );
        $stmt->execute(['kode_buku' => $kode_buku]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO buku (kode_buku, judul, penulis, tahun_terbit) VALUES (:kode_buku, :judul, :penulis, :tahun_terbit)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':kode_buku' => $data['kode_buku'],
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':tahun_terbit' => $data['tahun_terbit']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE buku SET kode_buku = :kode_buku, judul = :judul, penulis = :penulis, tahun_terbit = :tahun_terbit WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':kode_buku' => $data['kode_buku'],
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':tahun_terbit' => $data['tahun_terbit']
        ]);
    }

    public function delete(string $kode_buku): bool
{
    $stmt = $this->db->prepare(
        'DELETE FROM buku WHERE kode_buku = :kode_buku'
    );
    return $stmt->execute([':kode_buku' => $kode_buku]);
}
}
?>