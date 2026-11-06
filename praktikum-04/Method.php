<?php
class Latihan {
    public function __call(string $nama, array $argumen): mixed {
        if ($nama === 'salam') {
            return "Halo, selamat belajar PHP!";
        }

        throw new BadMethodCallException(
            "Method '$nama' tidak diizinkan."
        );
    }
}

$obj = new Latihan();

// Memanggil method yang diizinkan
echo $obj->salam() . "<br>";

// Memanggil method yang tidak diizinkan
try {
    $obj->belajar();
} catch (BadMethodCallException $e) {
    echo "Exception: " . $e->getMessage();
}
?>