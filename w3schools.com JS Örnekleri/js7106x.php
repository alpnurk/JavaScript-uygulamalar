<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars (trim($_POST ["isim"]));
    $comment = htmlspecialchars (trim($_POST ["yorum"]));
    if (!empty ($name) && !empty ($comment)) {
        echo "<p>Selam, <b>$name</b>. Yorumlar�n�z�n bize ula�mas� ba�ar�l�.<p>";
        echo "<p>G�nderdi�iniz yorum: <b>$comment</b></p>";
    }else {echo "<p>L�tfen formdaki heriki veri giri� alan�n� da doldurunuz!</p>";}
}else {echo "<p>Bir hata olu�tu. L�tfen tekrar deneyin.</p>";}
?>