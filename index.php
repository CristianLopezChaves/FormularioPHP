<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Cristian López Chaves">
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Saludos, <?php echo $_POST["nombre"]; ?> </h1> <br>

Tu Email es: <?php echo $_POST["email"]; ?> <br>
Tu contraseña es: <?php echo $_POST["password"]; ?> <br>
Eres mayor de edad? <?php echo $_POST["mayormenor"]; ?> <br>
Eres de: <?php echo $_POST["lugar"]; ?> <br>
Tus colores favoritos son: <?php echo $_GET["checkbox"]; ?> <br>
Es esta la imagen que has subido? <?php echo $_POST["DNI"]; ?>

</body>
</html>
