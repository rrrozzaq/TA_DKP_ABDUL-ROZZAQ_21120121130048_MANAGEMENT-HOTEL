<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir Praktikum DKP 2022</title>
    <style type="text/css">
         html {
            background-image: url(rozak8.png);
        }

        .login {
            margin: auto;
            width: 400px;
            padding: 30px;
            /* border: 2px solid; */
            background: #c8981e;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.4);

        }

        input[type=text] {
            margin: 5px auto;
            width: 100%;
            padding: 10px;
        }

        select {
            margin: 5px auto;
            width: 100%;
            padding: 10px;
        }

        input[type=submit] {
            margin: 5px auto;
            float: right;
            padding: 2px;
            width: 90px;
            border: 1px solid #fff;
            color: #fff;
            background: maroon;
            cursor: pointer;
            border-radius: 20px;
        }

        /* button {
               background: maroon;
               cursor: pointer;
               color: #fff;
          } */
    </style>

    <head>

    <body>

        <br><br><br><br><br><br><br><br>
        <!-- <table width="100%">

            <tr>

                <td bgcolor="#c8981e" align="center">

                    <h2>&nbsp;&nbsp;QAZZOR HOTEL</h2>

                </td>

                <td width="15%" bgcolor="#c8981e">

                    <form class="" action="index.html" method="post">

                        <input height="50px" type="search" name="" value="" placeholder="Cari data">

                        <button type="button" name="button">Cari</button>

                    </form>

                </td>

            </tr>

        </table> -->

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
        <div class="login">
            <h2 align="center">FORM RESERVASI</h2>
            <form class="form" action="hasil.php" method="post" id="form">
                <div class="form-nama">
                    <label for="nama">Masukkan Nama:</label>
                    <input type="text" id="title" name="nama" required>
                </div>
                <div class="form-alamat">
                    <label for="alamat">Masukkan Alamat:</label>
                    <input type="text" id="title" name="alamat" required>
                </div>
                <div class="form-nomor">
                    <label for="nomor">Masukkan Nomor HP</label>
                    <input type="text" id="title" name="nomor" required>
                </div>
                <div class="form-durasi">
                    <label for="durasi">Durasi Menginap</label>
                    <input type="text" id="title" name="durasi" required>
                </div>
                <div class="form-tipe">
                    <label for="tipe">Tipe Kamar</label>
                    <select class="form-tipe" aria-label="Default select example" name="tipe" id="title">
                        <option selected>Pilih jenis kamar</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="general">General</option>
                    </select>
                </div>

                <input type="submit" value="Submit" name="Submit" class="btn-submit">
            </form>
        </div>
    </body>

</html>