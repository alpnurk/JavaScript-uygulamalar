<?php
// Adlar dizisi...
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// q parametresini yurel'den al...
$q = $_REQUEST ["q"];

$ipucu = "";

// E�er $q != "" bo� de�ilse, diziden tara...
if ($q !== "") {
    $q = strtolower ($q);
    $len=strlen ($q);
    foreach ($a as $ad) {
        if (stristr ($q, substr ($ad, 0, $len))) {
            if ($ipucu === "") {$ipucu = $ad;
            }else {$ipucu .= ",$ad";}
        } // if sonu...
    } // for.. sonu...
} // d��-if sonu...

// E�er bulunan ipucu yoksa "tavsiye yok" ��kt�s�n�, varsa bulunan� yans�t...
echo $ipucu === "" ? "tavsiye yok" : $ipucu;
?>