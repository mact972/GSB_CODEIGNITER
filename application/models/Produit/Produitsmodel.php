<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Produitsmodel extends CI_Model {


	protected $table = "produit";


	function __construct ()
	{
 
	parent:: __construct ();
	$this->load->database();
	
	}

	function recupAll(){

		$query = $this->db->get('produit');
		return $query->result() ;

	}

	function recupAll_By_Id($id){

		$query = $this->db->where(array('id'=>$id))->limit(1)->get('produit');
		return $query->result() ;

	}

	function supprimer($id){

		$this->db->where('id', $id);
		$this->db->delete('produit');
	}

	function up($id, array $data){

		$this->db->where('id', $id) ;
		$this->db->update('produit', $data);


	}

	function aj(array $data){

		$this->db->insert('produit', $data);

	}

}