<?php
header ("Content-Type: application/json; charset=ISO-8859-9");
$nesne = json_decode ($_GET ["x"], false); // veya $_POST
$ba�lant� = new mysqli ("sunucum", "kullan�c�m", "�ifrem", "Northwind");
$ifade = $ba�lant�->prepare ("SELECT isim FROM ? LIMIT ?");
$ifade->bind_param ("ss", $nesne->table, $nesne->limit);
$ifade->execute();
$sonu� = $ifade->get_result();
$��kt� = $sonu�->fetch_all (MYSQLI_ASSOC);
echo json_encode ($��kt�);
?>