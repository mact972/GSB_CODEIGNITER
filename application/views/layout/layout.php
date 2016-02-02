<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>

		<?php
		$this->load->view('content/header');

		$this->load->view('connexion/connect_form');

		$this->load->view('content/footer');

		?>

	</body>
</html>



<!--<?php 

/*foreach ($bloc as $key) {

	echo $key;
	
}
*/

?>-->