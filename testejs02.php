<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Teste JavaScript</title>
	<meta charset="UTF-8"/>
	<script>
	function acendeLampada() {
		getElementById("luz").src = "_imagens/lampada-acesa.jpg";		
	}
		
	</script>
</head>
<body>
	<h1> Acenda a lâmpada</h1>
	<img src="_imagens/lampada-apagada.jpg" id="luz" onmousemove="acendeLampada()"/>
</body>
</html>