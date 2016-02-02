<?php

$this->load->helper('html');
$this->load->library('form_validation');

echo heading($titre, 3);

echo validation_errors(); 

?>

<form method="post" action="http://localhost/CodeIgniter-3.0.3/index.php/Admin/connecter">
		<div class="form">
			<div class="form-group col-sm-2">
				<label for="exampleInputEmail1">Login :</label>
				<input type="text" class="form-control" name="login">
			</div>
					
			<div class="form-group col-sm-4">
				<label for="exampleInputEmail1">Mot de passe :</label>
				<input type="text" class="form-control" name="mdp">
			</div>

			<div class="col-sm-offset-5 bu">
				<input type="submit" class="btn btn-primary " name="valider" value="Connexion">
			</div>
		<div>
</form>
	