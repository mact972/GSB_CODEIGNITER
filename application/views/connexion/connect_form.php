<?php

$this->load->helper('html');
$this->load->library('form_validation');

echo "<div class='ti'>".heading($titre, 3)."</div>";

echo validation_errors(); 

?>

<form method="post" action="http://localhost/CodeIgniter-3.0.3/index.php/Connect/connecter">
		<div class="form">
			<div class="form-group col-sm-2 lo">
				<label for="exampleInputEmail1">Login :</label>
				<input type="text" class="form-control" placeholder="Login" name="login">
			</div>
					
			<div class="form-group col-sm-4 mp">
				<label for="exampleInputEmail1">Mot de passe :</label>
				<input type="text" class="form-control" placeholder="Mot de passe" name="mdp">
			</div>

			<div class="col-sm-offset-5 bu">
				<input type="submit" class="btn btn-primary b" name="valider" value="Connexion">
			</div>
		</div>
</form>
	