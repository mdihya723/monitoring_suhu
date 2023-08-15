<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Suhu</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h1>Data Suhu</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Lokasi</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Suhu (°C)</th>
          <th>Kelembaban (%)</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $json_data = file_get_contents('suhu.json');
          $suhu_data = json_decode($json_data, true);
          
          foreach ($suhu_data as $data) {
            echo "<tr>";
            echo "<td>{$data['id']}</td>";
            echo "<td>{$data['lokasi']}</td>";
            echo "<td>{$data['tgl']}</td>";
            echo "<td>{$data['waktu']}</td>";
            echo "<td>{$data['suhu']}</td>";
            echo "<td>{$data['kelembaban']}</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
