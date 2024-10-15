<?php

$hasil = 0;

for ($i = 1; $i <= 19; $i += 2) {
    $hasil += $i;
}

echo "Hasil penjumlahan dengan for: 1 + 3 + 5 + ... + 19 = " . $hasil;
?>

<?php

$angka_ganjil = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];

$hasil = 0;

foreach ($angka_ganjil as $angka) {
    $hasil += $angka;
}

echo "Hasil penjumlahan dengan foreach: 1 + 3 + 5 + ... + 19 = " . $hasil;
?>

