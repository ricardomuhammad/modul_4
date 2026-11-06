<?php
class Buku {
    public string $judul;
    public string $penulis;
    public int $tahun;

    public function __construct(string $judul, string $penulis, int $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;

        echo "Objek buku dibuat: {$this->judul}<br>";
    }

    public function tampilInfo(): void {
        echo "Judul: {$this->judul}<br>";
        echo "Penulis: {$this->penulis}<br>";
        echo "Tahun: {$this->tahun}<br><br>";
    }

    public function __destruct() {
        echo "Objek buku dihapus: {$this->judul}<br>";
    }
}

// Membuat objek buku
$buku1 = new Buku("Atomic Habits", "James Clear", 2018);

// Membuat alias yang menunjuk ke objek yang sama
$aliasBuku = $buku1;

echo "<hr>1. Menghapus buku1:<br>";
unset($buku1);

// Alias masih bisa digunakan
echo "Mengakses objek melalui alias:<br>";
$aliasBuku->tampilInfo();

echo "<hr>2. Menghapus aliasBuku:<br>";
unset($aliasBuku);

echo "<br>Program selesai.";
?>