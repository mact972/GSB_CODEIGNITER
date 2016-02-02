<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<table class="table table-striped">
			<?php foreach($produits as $prod): ?>
					<tr>
						<td><?php echo $prod->id; ?></td>
						<td><?php echo $prod->desc; ?></td>
						<td><?php echo $prod->date_create;?></td>
						<td><?php echo $prod->date_update;?></td>
						<td><a href="<?php echo base_url() . "index.php/produit/ajouter"; ?>">Ajouter</a></td>
						<td><a href="<?php echo base_url() . "index.php/produit/sup/" . $prod->id; ?>">Supprimer</a></td>
						<td><a href="<?php echo base_url() . "index.php/produit/modif/" . $prod->id; ?>">Modifer</a></td>
					</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>