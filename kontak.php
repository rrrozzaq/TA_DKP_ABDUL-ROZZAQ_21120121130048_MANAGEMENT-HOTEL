<!DOCTYPE html>
<html>

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


        <?php
        class kontakAdmin //class
        {
            private $nama;
            private $nomor;
            private $email;

            public function __construct($nama, $nomor, $email) //constructor
            {
                $this->nama = $nama;
                $this->nomor = $nomor;
                $this->email = $email;
            }

            public function setNama($admin)
            {
                $this->nama = $admin;
            }

            public function setNomor($nomor1)
            {
                $this->nomor = $nomor1;
            }

            public function setEmail($email1)
            {
                $this->email = $email1;
            }

            public function getNama()
            {
                return $this->nama;
            }

            public function getNomor()
            {
                return $this->nomor;
            }

            public function getEmail()
            {
                return $this->email;
            }
        }

        $admin1 = new kontakAdmin("Abdul", "085238318", "abdul@gmail.com");
        //modul 7 oop 2 setter getter
        echo "-- Admin 1 -- <br>";
        echo $admin1->getNama() . "<br>";
        echo $admin1->getNomor() . "<br>";
        echo $admin1->getEmail() . "<br>";

        $admin2 = new kontakAdmin("","","rozzaq@gmail.com");
        $admin2->setNama("Rozzaq");
        $admin2->setNomor("083144178");

        echo "-- Admin 2 -- <br>";
        echo $admin2->getNama() . "<br>";
        echo $admin2->getNomor() . "<br>";
        echo $admin2->getEmail() . "<br>";

        ?>


    </body>
    <footer></footer>

</html>
