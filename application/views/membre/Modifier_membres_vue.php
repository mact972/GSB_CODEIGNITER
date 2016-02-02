
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<form method="post">

		<?php foreach($lemembre as $me): ?>
					<div class="form-group col-sm-2">
						<label for="exampleInputEmail1">Id :</label>
						<input type="text" class="form-control" value="<?php echo $me->id; ?>" name="id">
					</div>
					
					<div class="form-group col-sm-4">
						<label for="exampleInputEmail1">login :</label>
						<input type="text" class="form-control" value="<?php echo $me->login; ?>" name="login">
					</div>
					
					<div class="form-group col-sm-3">
						<label for="exampleInputEmail1">Mot de passe :</label>
						<input type="text" class="form-control" value="<?php echo $me->mdp;?>" name="mdp">
					</div>
					
					<div class="col-sm-offset-5 bu">
					<input type="submit" class="btn btn-primary " name="modifier" value="Modifer">
					</div>

		<?php endforeach; ?>

		</form>
	</body>
</html>