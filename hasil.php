<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum DKP 2021</title>
  <style type="text/css">
    html {
      background-image: url(rozak8.png);
    }

    time {
      color: #ffffff00;
    }

    .login {
      margin: auto;
      width: 400px;
      padding: 30px;
      background: #c8981e;
      border-radius: 20px;
      box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.4);

    }
  </style>

  <head>

  <body>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="login">
      <h2 align="center">DATA RESERVASI</h2>
      <div class="wrapper">
        <div class="container bg-white">
          <table class="form">
            <tr>
              <td>Nama Customer</td>
              <td>: <?php echo $nama = $_POST['nama']; ?></td> <!-- method POST  -->
            </tr>
            <tr>
              <td>Alamat Customer</td>
              <td>: <?php echo $alamat = $_POST['alamat']; ?></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td>: <?php echo $nomor = $_POST['nomor']; ?></td>
            </tr>
            <tr>
              <td>Durasi Menginap</td>
              <td>: <?php echo $durasi = $_POST['durasi']; ?></td>
            </tr>
            <tr>
              <td><br>
                <?php $tipe = $_POST['tipe'];
                if ($tipe == 'deluxe') {   //modul 2 pengkondisian
                  $hasil = 'Tipe kamar anda ' . $tipe;
                } else {
                  $hasil = 'Tipe kamar anda ' . $tipe;
                }
                echo $hasil;
                ?>
              </td>
            </tr>
          </table>
        </div>
      </div>
  </body>

</html>
