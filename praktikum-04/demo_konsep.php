<?php
declare(strict_types=1);
require_once __DIR__ . '/Mahasiswa.php';

define('DEMO_LIFECYCLE', true);
header('Content-Type: text/plain; charset=utf-8');

echo "1. Menjalankan Kontruktor\n";

$m1 = new Mahasiswa('123', 'Alya');
$m2 = new Mahasiswa('124', 'Budi', 'Teknik');

echo $m1->nama . ' - ' . $m1->fakultas . PHP_EOL;
echo $m2->nama . ' - ' . $m2->fakultas . PHP_EOL;

echo "\n2. Menjalankan OVERLOADING  Attribut\n";

$m->ukuranJaket = 'M';       // __set() karena property tidak dideklarasikan
echo $m->ukuranJaket . "\n"; // __get()
echo isset($m->ukuranJaket) ? "Ada\n" : "Tidak ada\n";
unset($m->ukuranJaket);     // __unset()

echo "\n3.Menjalankan  OVERLOADING METHOD\n";
echo $m->profilSingkat() . "\n"; // __call()

echo "\n4.Menjalankan  DESTRUCTOR\n";
echo "Lihat log error PHP setelah unset referensi terakhir.\n";
unset($m); // destructor menulis error_log, bukan menghapus record CRUD
