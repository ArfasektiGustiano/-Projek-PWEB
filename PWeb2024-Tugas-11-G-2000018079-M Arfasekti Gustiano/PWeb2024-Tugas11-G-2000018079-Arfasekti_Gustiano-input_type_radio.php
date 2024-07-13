<!DOCTYPE html>
<html>
<head>
    <title> Penggunaan Radio Button di PHP</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    Pilih Jenis Kelamin: <br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
    <input type="submit" value="Submit">
</form>

<?php
//Mengecek apakah ada nilai dengan nama jenis_kelamin yang dikirim dari form
if (isset($_POST['jenis_kelamin'])) {

    $jenis_kelamin=$_POST['jenis_kelamin'];
    echo "<br>".$jenis_kelamin;
}
?>
</body>
</html>