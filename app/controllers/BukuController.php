<?php
class BukuController
{
    public function __construct(private Buku $model) {}

    public function index(): void
    {
        $buku = $this->model->getAll();
        require __DIR__ . '/../views/buku/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/buku/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php?page=buku');
        exit;
    }

    public function edit(): void
    {
        $kode_buku = $_GET['kode_buku'] ?? '';
        $buku = $this->model->findByKodeBuku($kode_buku);

        if (!$buku) {
            http_response_code(404);
            exit('Data buku tidak ditemukan.');
        }
        require __DIR__ . '/../views/buku/edit.php';
    }

    public function update(): void
    {
        // Jika update menggunakan id atau kode_buku lama sebagai acuan, sesuaikan di sini.
        // Berdasarkan kode sebelumnya, kita gunakan kode_buku atau id jika diperlukan.
        $data = $this->validateInput($_POST);
        
        // Asumsi model update menerima parameter identifikasi (misal id atau kode_buku)
        // Jika tabel Anda menggunakan primary key 'id' untuk update:
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->update($id, $data);
        
        header('Location: index.php?page=buku');
        exit;
    }

    public function delete(): void
    {
        // Diubah dari $_POST['id'] menjadi $_GET['kode_buku'] agar sesuai dengan link di view
        $kode_buku = $_GET['kode_buku'] ?? '';

        if ($kode_buku !== '') {
            $this->model->delete($kode_buku);
        }

        header('Location: index.php?page=buku');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'kode_buku' => trim($input['kode_buku'] ?? ''),
            'judul' => trim($input['judul'] ?? ''),
            'penulis' => trim($input['penulis'] ?? ''),
            'tahun_terbit' => trim($input['tahun_terbit'] ?? '')
        ];
        if ($data['kode_buku'] === '' || $data['judul'] === '' || $data['penulis'] === '' || $data['tahun_terbit'] === '') {
            exit('Kode buku, judul, penulis, dan tahun terbit wajib diisi.');
        }
        return $data;
    }
}
?>