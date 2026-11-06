<?php
class Latihan {
    private array $data = [];

    // Mengatur atribut dinamis
    public function __set(string $nama, mixed $nilai): void {
        $this->data[$nama] = $nilai;
    }

    // Mengambil nilai atribut
    public function __get(string $nama): mixed {
        return $this->data[$nama] ?? null;
    }

    // Memeriksa keberadaan atribut
    public function __isset(string $nama): bool {
        return isset($this->data[$nama]);
    }

    // Menghapus atribut
    public function __unset(string $nama): void {
        unset($this->data[$nama]);
    }
}

$obj = new Latihan();

// Menguji __set()
$obj->hobi = "Bermain futsal";
echo "Hobi ditambahkan.<br>";

// Menguji __get()
echo "Hobi: " . $obj->hobi . "<br>";

// Menguji __isset()
echo "Apakah hobi tersedia? ";
var_dump(isset($obj->hobi));

// Menguji __unset()
unset($obj->hobi);
echo "<br>Hobi dihapus.<br>";

// Memeriksa kembali atribut
echo "Apakah hobi masih tersedia? ";
var_dump(isset($obj->hobi));
?>