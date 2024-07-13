Membuat array
<?php 
//membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','apel','anggur');
//menampilkan data array dengan nomor urut 2
echo $buah[2]. "<br>";
echo $buah[0]. "<br><br>";
?>

array asosiatif
<?php
$array_saya = array( 'tahun' => 1610, 
  'organisasi' => 'VOC Belanda', 
  'total'  => 350);

  echo $array_saya[ 'tahun']."<br>";
echo "\n";
echo $array_saya[ 'organisasi']."<br><br>";
?>

Mencetak struktur array
<?php
$arrWarna=array("biru","hitam","merah","putih","hijau","kuning");
$arrNilai=array("andi"=>80,"Budi"=>90, "Beni"=>90, "Dodi"=>75, "Endi"=>85);
echo "<pre>";
print_r($arrWarna);
echo "<br>";
print_r($arrNilai);
echo "</pre>";
?>

Mengurutka array dengan sort
<?php
$arrNilai=array("andi"=>80,"Budi"=>90, "Beni"=>90, "Dodi"=>75, "Endi"=>85);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>array setelah diurutkan dengan rsort()</b>";
echo "</pre>";
print_r($arrNilai);
echo "</pre>";
?>

Pointer dalam array
<?php
$transport = array('bus','truck','motorcycle','ship');
echo " <pre>";
print_r($transport);
echo " </pre>";
 
$mode = current($transport);
echo $mode."<br>"; // $mode = 'bus';
$mode = next($transport);
echo $mode."<br>"; // $mode = 'truck';
$mode = current($transport);
echo $mode."<br>"; // $mode = 'truck';
$mode = prev($transport);
echo $mode."<br>"; // $mode = 'bus';
$mode = end($transport);
echo $mode."<br>"; // $mode = 'ship';
$mode = current($transport);
echo $mode."<br>"; // $mode = 'ship';
?>

Mencari elemen array
<?php
$arrWarna = array("Merah","Biru","Kuning","Hijau","Putih");
if(in_array("Hijau", $arrWarna)){
    echo "Ada warna Hijau di dalam array tersebut!";
}else{
    echo "Tidak ada warna hijau di array tersebut";
}
?>

Fungsi dalam PHP 
<?php
function cetak_ganjil(){
    for($i = 0; $i <50; $i++){
        if($i%2==1){
            echo "$i,";
        }
    }
}

cetak_ganjil();
?>
