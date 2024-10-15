<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
            display: inline-block;
        }
        .card img {
            width: 100%;
            height: 200px; /* Atur tinggi yang konsisten */
            object-fit: cover; /* Potong gambar jika terlalu besar tapi tetap proporsional */
            border-radius: 10px;
        }
        .card h3 {
            margin-top: 10px;
            font-size: 1.5em;
        }
        .card p {
            font-size: 1em;
            color: #555;
        }
        .card span {
            font-size: 1.2em;
            font-weight: bold;
            color: #f60;
        }
    </style>
</head>
<body>

<h1>Daftar Produk</h1>

<?php

$produk = [
    [
        'nama' => 'Laptop A',
        'deskripsi' => 'Laptop dengan performa tinggi untuk gaming.',
        'harga' => 15000000,
        'gambar' => 'laptop-a.jpg'
    ],
    [
        'nama' => 'Smartphone B',
        'deskripsi' => 'Smartphone dengan kamera luar biasa dan layar AMOLED.',
        'harga' => 7000000,
        'gambar' => 'smartphone-b.jpg'
    ],
    [
        'nama' => 'Headphone C',
        'deskripsi' => 'Headphone dengan kualitas suara terbaik dan noise cancellation.',
        'harga' => 2500000,
        'gambar' => 'headphone-c.jpg'
    ],
    [
        'nama' => 'Smartwatch D',
        'deskripsi' => 'Jam tangan pintar dengan fitur kesehatan lengkap.',
        'harga' => 3000000,
        'gambar' => 'smartwatch-d.jpg'
    ],
    [
        'nama' => 'Tablet E',
        'deskripsi' => 'Tablet dengan layar besar dan performa cepat.',
        'harga' => 5000000,
        'gambar' => 'tablet-e.jpg'
    ],
    [
        'nama' => 'Speaker F',
        'deskripsi' => 'Speaker portabel dengan kualitas suara tinggi.',
        'harga' => 1500000,
        'gambar' => 'speaker-f.jpg'
    ]
];

foreach ($produk as $item) {
    echo '<div class="card">';
    echo '<img src="foto/' . $item['gambar'] . '" alt="' . $item['nama'] . '">';
    echo '<h3>' . $item['nama'] . '</h3>';
    echo '<p>' . $item['deskripsi'] . '</p>';
    echo '<span>Rp ' . number_format($item['harga'], 0, ',', '.') . '</span>';
    echo '</div>';
}
?>

</body>
</html>
