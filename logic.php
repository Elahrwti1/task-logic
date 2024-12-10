<?php $data_array = [
    ["id" => "1", "nama_mahasiswa" => "Rifqi Ismail", "program_studi" => "Informatika", "nilai_pertama" => 70, "nilai_kedua" => 93],
    ["id" => "2", "nama_mahasiswa" => "Sanab Nabil", "program_studi" => "Manajemen", "nilai_pertama" => 80, "nilai_kedua" => 62],
    ["id" => "3", "nama_mahasiswa" => "Zaenal Arhan", "program_studi" => "Informatika", "nilai_pertama" => 87, "nilai_kedua" => 63],
    ["id" => "4", "nama_mahasiswa" => "Indah Salma", "program_studi" => "Informatika", "nilai_pertama" => 65, "nilai_kedua" => 90],
]
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Nilai Mahasiswa</title>
        <link rel="stylesheet" href="styles.css">
        
    </head>
    <body>
        <h1>Daftar Nilai Mahasiwa Program Studi <br> Informatika dan Manajemen</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mahasiswa</th>
                    <th>Total Nilai</th>
                    <th>Nilai Pertama</th>
                    <th>Nilai Kedua</th>
                    <th>Rata-Rata</th>
                    <th>Total Nilai</th>
                    <th>lulus = Nilai > 150</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($data_array as $data):
                    $total_nilai = $data['nilai_pertama']+$data['nilai_kedua'];
                    $rata_rata = $total_nilai/2;
                    $status = $total_nilai > 150 ? "lulus" : "tidak-lulus";
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama_mahasiswa']; ?></td>
                        <td><?= $data['program_studi']; ?></td>
                        <td><?= $data['nilai_pertama']; ?></td>
                        <td><?= $data['nilai_kedua']; ?></td>
                        <td><?= number_format ($rata_rata,2); ?></td>
                        <td><?= $total_nilai;?></td>
                        <td class="<?= $status_class;?>"><?= $status;?></td>                
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>