<!DOCTYPE html>
<html>
<head>
	<title>Acces au compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
    	<h1>S'identifier</h1>
    	<input type="text" name="name" placeholder="Nom complet">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="S'enregistrer">
    </form>
        <?php 
        include("enregistrer.php");
        ?>
</body>
</html>