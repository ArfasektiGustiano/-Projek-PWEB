<html>
    <head><title> buah favorite</title></head>
    <body>
        <form action="" method="post" name="input">
            <h2>pilih buah yang anda sukai</h2>
            <select name="buah">
                <option value="apel">apel</option>
                <option value="jeruk">jeruk</option>
                <option value="mangga">mangga</option>
                <option value="pisang">pisang</option>
                <option value="nanas">nanas</option>
                <option value="semangka">semangka</option>
</select>
<input type="submit" name="pilih" value="pilih"/>
</form>
</body>
</html>

<?php
if(isset($_POST['pilih'])){
    $buah=$_POST['buah'];
    echo "buah favorit anda adalah :
    <font color=green><b>$buah</b></font>";
}
?>