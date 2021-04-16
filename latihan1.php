<?php
$mahasiswa = [
    [
        "nim" => "17.51.0024",
        "nama" => "Nova Siregar",
        "jurusan" => "Teknologi Informasi",
        "email" => "nova_17510024@stimata.ac.id",
        "gambar" => "nova.jpg"
    ],
    [
        "nim" => "10.51.0001",
        "nama" => "Soekarno",
        "jurusan" => "Teknologi Informasi",
        "email" => "soekarno_10510001@stimata.ac.id",
        "gambar" => "soekarno.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim= <?= $mhs["nim"]; ?> & jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>& gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>