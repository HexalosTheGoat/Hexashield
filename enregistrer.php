<?php 

include("database.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">l'inscription est réussi</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Une erreur est survenue !</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Veuillez remplir les champs !</h3>
           <?php
    }
}

?>