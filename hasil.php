<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Praktikum DKP 2021</title>
    <head>
      
    <body>
      <header>
            <h2 class="text-center">
                Praktikum DKP: GUI PHP
            </h2>
      </header>
      <div class="wrapper">
            <div class="container bg-white">
                  <h2 class="container-header text-center">Hasil Data</h2>
                  <table class="form">
                    <tr>
                      <td>Nama Customer</td> 
                      <td>: <?php echo $nama = $_POST['nama']; ?></td> 
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
                          $hasil = 'Tipe kamar anda '.$tipe; 
                          } else {
                          $hasil = 'Tipe kamar anda '.$tipe;
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