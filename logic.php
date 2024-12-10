<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h1>Daftar Nilai Mahasiswa Program Studi <br> Informatika dan Manajemen</h1>

    <?php
    $data_array = [
        ["id" => "1", "nama_mahasiswa" => "Rifqi Ismail", "program_studi" => "Informatika", "nilai_pertama" => 70, "nilai_kedua" => 93],
        ["id" => "2", "nama_mahasiswa" => "Sadad Nabil", "program_studi" => "Manajemen", "nilai_pertama" => 80, "nilai_kedua" => 62],
        ["id" => "3", "nama_mahasiswa" => "Friska Aprilia", "program_studi" => "Akuntansi", "nilai_pertama" => 92, "nilai_kedua" => 77],
        ["id" => "4", "nama_mahasiswa" => "Zaenal Arham", "program_studi" => "Informatika", "nilai_pertama" => 87, "nilai_kedua" => 63],
        ["id" => "5", "nama_mahasiswa" => "Laila Shafira", "program_studi" => "Pendidikan Matematika", "nilai_pertama" => 67, "nilai_kedua" => 83],
        ["id" => "6", "nama_mahasiswa" => "Indah Salma", "program_studi" => "Informatika", "nilai_pertama" => 65, "nilai_kedua" => 90],
    ];
    $filtered_data = array_filter($data_array, function ($item) {
        return in_array($item ['program_studi'], [ 'Informatika', 'Manajemen'] );
        });

    echo '<table>';
    echo '<tr>
            <th>No.</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Nilai Pertama</th>
            <th>Nilai Kedua</th>
            <th>Rata-Rata</th>
            <th>Total Nilai</th>
            <th>Lulus = Nilai > 150</th>
          </tr>';

    $no = 1;
    foreach ($filtered_data as $data) {
        $rata_rata = ($data['nilai_pertama'] + $data['nilai_kedua']) / 2;
        $total_nilai = $data['nilai_pertama'] + $data['nilai_kedua'];
        $status_lulus= $total_nilai > 150;

        $row_class = $status_lulus ? 'row-lulus' : 'row-tidak-lulus';
        $status = $status_lulus ? '<span class="status-lulus">LULUS</span>' : '<span class="status-tidak-lulus">TIDAK LULUS</span>';
        

        echo '<tr class="' . $row_class . '">
                <td>' . $no++ . '</td>
                <td>' . $data['nama_mahasiswa'] . '</td>
                <td>' . $data['program_studi'] . '</td>
                <td>' . $data['nilai_pertama'] . '</td>
                <td>' . $data['nilai_kedua'] . '</td>
                <td>' . number_format($rata_rata, 2) . '</td>
                <td>' . $total_nilai . '</td>
                <td>' . $status . '</td>
              </tr>';
    }

    echo '</table>';
    ?>
</body>
</html>