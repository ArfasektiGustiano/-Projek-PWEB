<html>
    <head><head>form kritik dan saran</title></head>
    <body>
        <form action="" method="post" name="input">
            <h2>silahkan masukkan kritik dan saran anda</h2>
            <textarea name="saran" cols="40" rows="5"></textarea><br>
            <input type="submit" name="proses" value="input saran"/>
</form>
</body>
</html>

<?php
if(isset($_POST['proses'])){
    $saran=nl2br($_POST['saran']);
    echo "kritik/saran anda adalah : <br>";
    echo "<font color=brown><b>$saran</b></font>";
}
?>