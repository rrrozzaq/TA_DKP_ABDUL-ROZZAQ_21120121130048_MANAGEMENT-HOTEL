<!DOCTYPE html>
<html>
<!-- modul yang dipakai dalam Tugas Akhir :
modul 1 tipe data variabel
modul 2 pengkondisian 
modul 4 function dan method 
modul 5 oop I class constructor
modul 7 oop 2 setter getter
modul 8 gui -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir</title>
    <style type="text/css">
        html {
            background-image: url(rozak8.png);
        }

        time {
            color: #ffffff00;
        }

        /* input{
               float: right;
          }
          button {
               background: maroon;
               cursor: pointer;
               color: #fff;
               float: right;
          } */
    </style>

    <head>

    <body>
        <br><br><br><br><br><br><br>

        <table>

            <tr>

                <td><a href="index.php" style="color: black;">

                        <h3>Beranda | <h3>

                    </a></td>

                <td><a href="reservasi.php" style="color: black;">

                        <h3>Reservasi | <h3>

                    </a></td>

                <td><a href="kontak.php" style="color: black;">

                        <h3>Kontak<h3>

                    </a></td>

            </tr>

        </table>
        
        <div class="stay-safe">  
            <?php
            //class pendefinisi method (modul 5)
            class pendefinisi
            //modul 4 function dan method
            {
                public function staysafe(string $noun1, string $noun2)
                {
                    echo "Jangan lupa cuci tangan dengan $noun1 dan $noun2";
                }
            }

            //code pemanggil method
            
            //$objek merupakan instance dari class pendefinisi
            $objek = new pendefinisi();
 
            echo "<br>";
            $objek->staysafe('air', 'sabun');
            ?>
        </div>

        <table border="1">

            <tr>
                <td width="34%">
                    <img width="100%" src="hotel.jpg">
                </td>
                <td>
                    <img width="100%" src="kamar.jpg">
                </td>
                <td>
                    <img width="100%" src="reservasi.jpg">
                </td>
            </tr>

        </table>

    </body>
    <footer></footer>

</html>
