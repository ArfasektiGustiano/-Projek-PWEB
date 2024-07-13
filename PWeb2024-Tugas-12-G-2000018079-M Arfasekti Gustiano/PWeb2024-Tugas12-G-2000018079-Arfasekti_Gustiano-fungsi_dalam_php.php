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
