<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Dosya ve dizinleri listeleme</title>
	</head>
	<body>
    <?php
   if(!isset($_POST["yukle"])){?>

	<form action="yukle2.php" method=POST enctype="multipart/form-data" id ="dosyayukle" name="dosyayukle">
	<input type="file" name="dosya" id="dosya"/>
	<br> <br>
	<button type="submit" name="yukle" id="yukle">Dosyayı yükle</button>
	</form>
	<br>
    <?php
	 }else
	   if($_FILES["dosya"]["tmp_name"]){ //dosyanın sunucuya geçici olarak gönderilip gönderilmediğini kontrol ediyoruz
#copy($_FILES["dosya"]["tmp_name"],"dosyalar/".$_FILES["dosya"]["name"]); 
move_uploaded_file($_FILES["dosya"]["tmp_name"],"dosyalar/".$_FILES["dosya"]["name"]); 
echo($_FILES["dosya"]["name"]." dosyası başarı ile yüklendi.");
	   }
	   else{
echo("dosya yüklenemedi !");
	   }
   }
	?>
	</body>
</html>


