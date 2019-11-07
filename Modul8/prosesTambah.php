<HTML>
    <HEAD>
        <title>Simpan Buku Tamu</title>
    </HEAD>
    <BODY>
        <h1>Simpan Buku Tamu MySQL</h1>
        <?php
        
           $nama = $_POST['Nama'];
           $email = $_POST['Email'];
           $komentar = $_POST['Komentar'];

            $conn=mysqli_connect ("localhost","root","")
            or die ("koneksi gagal");
            mysqli_select_db($conn, "modul8");
            echo "Nama : $nama <br>";
            echo "Email : $email <br>";
            echo "Komentar : $komentar <br>";

            mysqli_query($conn, "insert into bukutamu
            values ('$nama','$email','$komentar')");
          
        ?>
    </BODY>
</HTML>