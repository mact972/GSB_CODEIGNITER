<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fiche extends CI_Controller {

	function __construct ()
	{
 
	parent:: __construct ();
	$this->load->helper(array('form', 'url'));
	$this->load->model('frais/Frais_model', 'Frais');
	
	}

	function index(){

		$data['titre'] = 'Fiche Frais';
		$id = $this->uri->segment(3,0);
		$req = $this->Frais->getMonth($id);
		/*$fiche_frais = $this->Frais->getficheFrais($id);*/
		$data['Lemoi'] = $req;
		/*$data['Fiches'] = $fiche_frais;*/
		$this->load->view('frais/fiche_frais', $data);
	}

	//fonction qui permet de récupéré les fiches restent à valider à l'aide de l'ajax
	function Chargerfiche(){

		$titi = $_REQUEST['titi'];
		$id = $this->uri->segment(3,0);
		$fiche_frais = $this->Frais->getficheFrais($id, $titi);
		
		foreach($fiche_frais as $fi){
					
			echo '<td>'.$fi->quantite.'<td>';
		}
							
			

	}


}