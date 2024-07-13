<html>
    <head> <title>Tugas 11</title></head>
    <body>
        <form action="" method="post" name="input">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="input" value="Tampilkan Isi TextBox"/>
        </form>
    </body>
</html>

<?php
if (isset($_POST['input'])){
    $nama=$_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>