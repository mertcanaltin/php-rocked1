<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>dosyadan veri okuma2</title>
</head>
<body>
    <?php

$yol= "dosyalar/hocalar.txt";


   
    if(file_exists($yol)){
          

          
    $dosya=fopen($yol);
    $oku=fread($dosya,filesize($yol)); #frad dosyadan okumak için kullanılır
    echo($oku);
    fclose($dosya); 
    }
    else{
        echo("Dosya Bulunamadı.");
    }
    ?>
</body>
</html>


