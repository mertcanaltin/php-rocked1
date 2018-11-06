

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Dosya ve dizinleri listeleme</title>
	</head>
	<body>
    <input type="number" min="0" max="100">
	<?php
    $yol=".";
    $dizin=opendir($yol);#klasör açmak için kulllanılır
        echo("<ul>");
        while (($dosyalar=readdir($dizin))!==false) {
            if($dosyalar!="." && $dosyalar!=".." && $dosyalar!="index.php"){
                $style=(is_dir($dosyalar))?"class=klasor":"class=dosya";
            echo("<li $style><a href=\"$yol/$dosyalar\">$dosyalar</a></li>");

        }
        }
        closedir($dizin);
        echo("</ul>");
	?>
	</body>
</html>


