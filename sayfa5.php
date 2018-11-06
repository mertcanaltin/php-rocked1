

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Dosya ve klasör kontrolleri</title>
	</head>
	<body>
	<?php
		$dosya="dosyalar/sinav.txt";
		$klasor="dosyalar/";
		if(is_file($dosya)) echo("$dosya bir dosyadır.<br/>"); else echo("$dosya bir dosya değildir.<br/>");
		if(is_dir($klasor)) echo("$klasor bir klasördür.<br/>"); else echo("$klasor bir klasör değildir.<br/>");
		if(is_readable($dosya)) echo("$dosya okunabilir.<br/>"); else echo("$dosya okunamaz.<br/>");
		if(is_writable($dosya)) echo("$dosya yazılabilir.<br/>"); else echo("$dosya yazılamaz.<br/>");
		if(is_executable($dosya)) echo("$dosya çalıştırılabilir.<br/>"); else echo("$dosya çalıştırılamaz.<br/>");
	?>
	</body>
</html>


