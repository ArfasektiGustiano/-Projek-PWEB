<!DOCTYPE html>
<head>
    <title>Desain Web</title>
    <link rel="stylesheet" href="styleee.css">
</head>

<body>
        <div class="profil"><center>PROFIL</center></div>
    <div class="main">
        <div class="kiri">
            <form action="#" method="POST" onSubmit="validasi()">
                <div>
                    <label><b>Nama Lengkap : </b></label>
                    <br>
                    <input type="text" name="nama" id="nama" />
                </div>
                <br>
                <div>
                    <label><b>Umur : </b></label>
                    <br>
                    <input type="umur" name="umur" id="umur" />
                </div>
                <br>
                <div>
                    <label><b>Alamat : </b></label>
                    <br>
                    <textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
                </div>
                <br>
                <div>
                    <input class="tombol" type="submit" value="Daftar">
                </div>
            </form>
            <p>
                <script type="text/javascript">
                    function validasi() {
                        var nama = document.getElementById("nama").value;
                        var umur = document.getElementById("umur").value;
                        var alamat = document.getElementById("alamat").value;
                        if (nama != "" && umur!="" && alamat !="") {
                            return true;
                        }else{
                            alert('Anda harus mengisi data dengan lengkap !');
                        }
                    }
                </script></p>
        </div>
        <div class="foto">
            <center><img src="dsg.png" alt=""></center>
            <br>
            <center><p>Ini adalah bentuk desain web dari saya</p></center>
        </div>
        <div class="bawah"><center>
            <p>Kontak : </p>
            <center><a href="#"><img src="fb.jpg" alt=""></a>
            <a href="#"><img src="ig.jpg" alt=""></a>
            <a href="#"><img src="twit.jpg" alt=""></a></center>
            
        </center>
        </div>
    </div>
</body>