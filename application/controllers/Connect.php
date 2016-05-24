<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Controller {

function __construct ()
	{
 
	parent:: __construct ();
	$this->load->helper(array('form', 'url'));
	$this->load->model('membre/Membre_model', 'Mem');
	$this->load->library('session');
	
	}

public function index()
	{
		$data['titre'] = 'Authenfication';
		$this->load->view('layout/layout', $data);
		
	}

//fonction qui permet de se connecter
public function connecter()
	{
		$data['titre'] = 'Authenfication';
		$this->load->view('layout/layout', $data);

		if($this->input->post("valider")){

			//il faut absolument le mot de passe et le login 
			$this->form_validation->set_rules('login','Login', 'required');
			$this->form_validation->set_rules('mdp','required');
			if($this->form_validation->run()){

				$login = $this->input->post("login");
				$mdp = $this->input->post("mdp");


					$this->Mem->verifier($login, $mdp);

					if( $login == "log_admin" && $mdp == "mdp_admin"){

							redirect('connect/chargerMembres', 'refresh');
					}
			}

		}

		$this->session->set_flashdata('error', 'La connexion a échoué, le mot de passe ou le login est incorrect !');
		redirect('Connect/index', 'refresh');

	}

	public function deconect(){



	}

	//fonction qui permet de charger l'ensemble de visiteurs de la base de données
	public function chargerMembres()
		{
			$data['titre'] = 'Administration';
			$personnes = $this->Mem->getMembres();
			$data['membres'] = $personnes;
			$this->load->view('membre/Membres_vue', $data);

		}

	//fonction qui permet de supprimer un visiteur
	public function supprimer()
		{

			$id = $this->uri->segment(3,0);
		
			$this->Mem->suppMembre($id);

			redirect('connect/chargerMembres', 'refresh');

		}

	//fonction qui permet de modifier un visiteur
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

				redirect('Connect/chargerMembres', 'refresh');
			}

		}

}
