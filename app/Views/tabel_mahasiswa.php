<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .hapus-button {
            color: red;
            cursor: pointer;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
        <h2 class="center-text">Tampil Data Mahasiswa</h2>
        <table>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Pilihan</th>
            </tr>
            <?php foreach($mahasiswa as $index => $mhs): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['kelas']; ?></td>
                    <td><?= $mhs['prodi']; ?></td>
                    <td><?= $mhs['email']; ?></td>
                    <td><a href="<?= site_url('mahasiswa/delete/'.$mhs['nim']); ?>" class="hapus-button">Hapus</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
