<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<?php

$this->load->helper('html');
$this->load->library('form_validation');

echo validation_errors(); 

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
		<script type="texte/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" rel="stylesheet"></script>
		<script type="texte/javascript" src="<?php echo base_url('assets/js/style.js'); ?>" rel="stylesheet"></script>

	</head>
	<body>

		<?php  $this->load->view('content/header'); ?>
		<?php echo "<h3 class='ti'>".heading($titre, 3)."</h3>"; ?>

		<select id="mois">				
			<option value="0.0">--- sélectionner le mois ---</option>
				

				<?php foreach($Lemoi as $mi): ?>
					<?php $mo = $mi->mois; ?>
					<?php echo '<option id="momo" value ="'.$mo.'">'.$mo.'</option>'; ?>
				<?php endforeach; ?>
				
		</select>

		<tableau id="tab">
			<tr>
				<td>Etape</td>
				<td>KM</td>
				<td>Nuitée</td>
				<td>Repas midi</td>
			</tr>

		</tableau>

		<?php $this->load->view('content/footer');?>

	</body>
</html>
