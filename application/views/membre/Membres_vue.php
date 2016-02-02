<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
echo "<h3>Félicitation M.l'Administrateur</h3>";
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>

		<?php echo "<h3>".$titre."</h3>"?>;

		<table class="table table-striped">
			<?php foreach($membres as $me): ?>
					<tr>
						<td><?php echo $me->id; ?></td>
						<td><?php echo $me->login; ?></td>
						<td><?php echo $me->mdp;?></td>
						<td><a href="<?php echo base_url() . "index.php/admin/supprimer/" . $me->id; ?>">Supprimer</a></td>
						<td><a href="<?php echo base_url() . "index.php/admin/modifier/" . $me->id; ?>">Modifer</a></td>
					</tr>
			<?php endforeach; ?>
		</table>

	</body>
</html>


