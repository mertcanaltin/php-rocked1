<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>dosyadan veri okuma1</title>
</head>
<body>
    <?php
    # file_exists dosya varmı kontrol yapar.
    if(file_exists("dosyalar/hocalar.txt")){
          //file_exists komutu dosya bulmaya yarar varsa true yoksa false verir

          #fopen("dosya yolu ve adı ","dosya açma modu "); 
    $dosya=fopen("dosyalar/hocalar.txt","r");
    while (!feof($dosya)) { #feof dosyanın sonu ise true değilse false döner
        $oku = fgets($dosya);# $oku = fgets($dosya); dosyadan satır satır okur 
        echo($oku."<br/>");
    }
    fclose($dosya); #açık olan dosyayı kapatır
    }
    else{
        echo("Dosya Bulunamadı.");
    }
    ?>
</body>
</html>


