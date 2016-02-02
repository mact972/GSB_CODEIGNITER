<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

	function __construct ()
	{
 
	parent:: __construct ();
	$this->load->helper(array('form', 'url'));
	$this->load->model('produit/produitsmodel', 'ProduitsModel');
	
	}

	public function index()
		{
				$this->load->view('produit/produit');
		}

	public function recup(){

		$tout = $this->ProduitsModel->recupAll();
		$data['produits'] = $tout;
		$this->load->view('produit/produit', $data);

	}

	public function sup(){

		$id = $this->uri->segment(3,0);
	
		$this->ProduitsModel->supprimer($id);

		redirect('produit/recup', 'refresh');
	
	}

	public function ajouter(){

		$this->load->view('produit/ajouter');

		if($this->input->post('ajouter')){

			$data = array();
			$data['id'] = $this->input->post('id');
			$data['desc'] = $this->input->post('desc');
			$data['date_create'] = $this->input->post('date_create');
			$data['date_update'] = $this->input->post('date_update');

			$this->ProduitsModel->aj($data);

			redirect('produit/recup', 'refresh');

		}
	}

	public function modif(){

		
		$id = $this->uri->segment(3,0);
		
		$le = $this->ProduitsModel->recupAll_By_Id($id);
		$data['leproduit'] = $le;
		$this->load->view('produit/modifier', $data);

		if ($this->input->post('modifier')) {

			$data = array();
			$data['desc'] = $this->input->post('desc');
			$data['date_create'] = $this->input->post('date_create');
			$data['date_update'] = $this->input->post('date_update');

			
			$this->ProduitsModel->up($id, $data);

			redirect('produit/recup', 'refresh');
		}

	}


}