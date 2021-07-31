<?php
// Your code here!
function vergiHesapla($tutar,$kdv,$oiv,$kdvdahil=false){
    $kdvoiv = ((100+($kdv+$oiv))/100);
    if ($kdvdahil == true){
        $sonuc = $tutar / $kdvoiv;
    } else {
        $sonuc = $tutar * $kdvoiv;
    }
    echo $sonuc;
}

echo "KDV ÖİV Hariçten Dahil Fiyatı Bulma"
vergiHesapla(100,18,10);
echo "<br>";
vergiHesapla(1100.90,8,10);
echo "<br>";
echo "KDV ÖİV Dahilden Hariç fiyatı bulma"
vergiHesapla(100,18,10,true);
?>
