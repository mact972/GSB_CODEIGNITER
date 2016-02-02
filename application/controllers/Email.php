<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	

	public function index()
	{
			$this->load->view('email/email');
	}

	public function add()
	{
			
		if($this->input->post('valider'))
		{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email1','MessagerieElectronique', 'valid_email|required|callback_checkEmail');
			$this->form_validation->set_rules('login','Login', 'required');
			$this->form_validation->set_rules('mdp1', 'password','required|min_length[4]|max_length[10]|matches[mdp2]');
			$this->form_validation->set_rules('mdp2','required|min_length[4]|max_length[10]');
			$mot1 = $this->input->post('mdp1');
			$mot2 = $this->input->post('mdp2');
			$data['motdepasse1'] = $this->input->post('mdp1');
			$data['motdepasse2'] = $this->input->post('mdp2');
			$email = $this->input->post('email1');
			$login = $this->input->post('login');
			$valider = $this->input->post('valider');

				if ($this->form_validation->run() == FALSE)
				{

					$this->load->view('email/email');
				}

				else{

					$this->load->view('email/resultat');
					echo "Le login est : ".$login."<br>L' email : ".$email. "<br> Le mot de passe est : ".$mot1;

				}

			}

		else
		{

				redirect('email/index', 'refresh');
		}
	}

	public function checkEmail($str){

		if($str == 'moi@moi.fr'){

			$this->form_validation->set_message('checkEmail','The email can not be the word "moi@moi.fr"');
			return FALSE;
		}
		else{

			return TRUE;
		}	
	}

}

