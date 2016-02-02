<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<form method="post">
			<div class="form-group col-sm-2">
				<label for="exampleInputEmail1">Id :</label>
				<input type="text" class="form-control" name="id">
			</div>
					
			<div class="form-group col-sm-4">
				<label for="exampleInputEmail1">Description :</label>
				<input type="text" class="form-control" name="desc">
			</div>
					
			<div class="form-group col-sm-3">
				<label for="exampleInputEmail1">Date de création :</label>
				<input type="text" class="form-control" name="date_create">
			</div>
					
			<div class="form-group col-sm-3">
				<label for="exampleInputEmail1">Date d'update :</label>
				<input type="text" class="form-control" name="date_update">
			</div>
			<div class="col-sm-offset-5">
				<input type="submit" class="btn btn-primary " name="Ajouter" value="Ajouter">
			</div>
		</form>
	</body>
</html>