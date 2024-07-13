<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kajian Masjid Al - Furqon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .thick-border-table, .thick-border-table th, .thick-border-table td {
            border: 3px solid black !important;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <!-- konten -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold text-center">Jadwal Kajian Masjid Al - Furqon</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <table class="table table-striped thick-border-table">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>Penceramah</th>
                            <th>Hari</th>
                            <th>Tentang Kajian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include "config/koneksi.php";
                        $sql = $conn->query("SELECT * FROM jadwal ORDER BY tanggal DESC");
                        $i = 0;  // Initialize the $i variable
                        foreach($sql as $d):
                        ?>
                        <tr>
                            <td><?= ++$i; ?></td>
                            <td><?= date("h:i:s A", strtotime($d['waktu'])); ?></td>
                            <td><?= date("d/M/Y", strtotime($d['tanggal'])); ?></td>
                            <td><?= $d['penceramah']; ?></td>
                            <td><?= $d['hari']; ?></td>
                            <td><?= $d['kajian']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- konten -->
</body>
</html>
