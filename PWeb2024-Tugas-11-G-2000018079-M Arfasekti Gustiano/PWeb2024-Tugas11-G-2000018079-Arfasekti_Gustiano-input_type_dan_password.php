<html>
    <head><title>Silahkan login</title></head>
    <body>
        <form action="" method="Post" name="input">
            <h2>Silahkan Login ya</h2>
            Username : <input type="text" name="username"/><br />
            Password : <input type="password" name="password"/> <br />
            <input type="submit" name="Login" value="Login"/>
            <input type="reset" name="reset" value="Reset"/>
</form>
</body>
</html>

<?php
if(isset($_POST['Login'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if($user=="admin" && $pass=="rahasia"){
        echo("<h2>Login berhasil, selamat</h2>");
    }else {
        echo "<h2> Login Gagal, maaf ulang lagi</h2>";
    }
}
?>