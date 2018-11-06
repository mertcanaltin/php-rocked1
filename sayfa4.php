<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>dosyadan veri yazma</title>
</head>
<body>
    <?php

$yol= "dosyalar/sinav.txt";
   
         # $dosya = fopen($yol,"w"); w yazma modunda açar eski bilgi silinir 
          $dosya = fopen($yol,"a"); //silinmez defalarca yazar
          $metin="internet programcılığı II dersinden kalmıyacağım";
          fwrite($dosya,$metin);
          fclose($dosya);
          echo("dosya yazıldı")
    
    ?>
</body>
</html>


