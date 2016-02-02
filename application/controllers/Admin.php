<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

function __construct ()
	{
 
	parent:: __construct ();
	$this->load->helper(array('form', 'url'));
	$this->load->model('membre/Membre_model', 'Mem');
	
	}

public function index()
	{
		$data['titre'] = 'Authenfication';
		$this->load->view('layout/layout', $data);
		
	}

public function connecter()
	{
		$data['titre'] = 'Authenfication';
		$this->load->view('layout/layout', $data);

		if($this->input->post("valider")){

			$this->form_validation->set_rules('login','Login', 'required');
			$this->form_validation->set_rules('mdp','required');
			
			$login = $this->input->post("login");
			$mdp = $this->input->post("mdp");


				$this->Mem->verifier($login, $mdp);

				if( $login == "log_admin" && $mdp == "mdp_admin"){

						redirect('admin/chargerMembres', 'refresh');
				}

		}

		redirect('Admin/index', 'refresh');

	}

public function chargerMembres()
	{
		$data['titre'] = 'Administration';
		$personnes = $this->Mem->getMembres();
		$data['membres'] = $personnes;
		$this->load->view('membre/Membres_vue', $data);

	}

public function supprimer()
	{

		$id = $this->uri->segment(3,0);
	
		$this->Mem->suppMembre($id);

		redirect('admin/chargerMembres', 'refresh');

	}

public function modifier()
	{
		$id = $this->uri->segment(3,0);
		
		$le = $this->Mem->getLeMembre($id);
		$data['lemembre'] = $le;
		$this->load->view('membre/Modifier_membres_vue', $data);

		if ($this->input->post('modifier')) {

			$data = array();
			$data['login'] = $this->input->post('login');
			$data['mdp'] = $this->input->post('mdp');

			$this->Mem->up($id, $data);

			redirect('Admin/chargerMembres', 'refresh');
		}

	}

}
