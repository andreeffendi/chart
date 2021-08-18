<center>
<?php
$con = mysqli_connect('localhost', 'root', '', 'db_vision');
?>

<!DOCTYPE html>
<html>
<head>
 <title>Chart </title>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body>
 <div style="width: 600px; height: 250px; margin-bottom: 100px;">
  <canvas id="bar-chart" width="800" height="450"></canvas>
 </div>
 
 <script type="text/javascript">
  // Bar chart
  new Chart(document.getElementById("bar-chart"), {
      type: 'bar',
      data: {
        labels: ["RPL", "MM", "TKR", "AP"],
        datasets: [
          {
            label: "Jumlah siswa",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
            data: [

            <?php

            $query = mysqli_query($con, "SELECT * FROM tb_jurusan WHERE nama_jurusan = 'RPL'");
            $jumlah = $query->fetch_assoc();

            echo $jumlah['jumlah_anak'];

            ?>

            ,

            <?php

            $query = mysqli_query($con, "SELECT * FROM tb_jurusan WHERE nama_jurusan = 'MM'");
            $jumlah = $query->fetch_assoc();

            echo $jumlah['jumlah_anak'];

            ?>

            ,

            <?php

            $query = mysqli_query($con, "SELECT * FROM tb_jurusan WHERE nama_jurusan = 'TKRO'");
            $jumlah = $query->fetch_assoc();

            echo $jumlah['jumlah_anak'];

            ?>

            ,

            <?php

            $query = mysqli_query($con, "SELECT * FROM tb_jurusan WHERE nama_jurusan = 'AP'");
            $jumlah = $query->fetch_assoc();

            echo $jumlah['jumlah_anak'];

            ?>

            ,0]
          }
        ]
      },
      options: {
        legend: { display: false },
        title: {
          display: true,
          text: 'Peserta didik tahun pelajaran 2021/2022'
        }
      }
  });
 </script>
 </center>