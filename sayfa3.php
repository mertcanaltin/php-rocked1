<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>dosyadan veri okuma3</title>
</head>
<body>
    <?php

$yol= "dosyalar/hocalar.txt";
    if(file_exists($yol)){
          $dosya = file($yol);
          #file dosyanın bir dizi değişken şeklinde okunmasını sağlar 
          //echo($dosya[0]);
          foreach ($dosya as $satir){
              echo($satir."<br/>");
              
              
          }
    }
    else{
        echo("Dosya Bulunamadı.");
    }
    ?>
</body>
</html>


