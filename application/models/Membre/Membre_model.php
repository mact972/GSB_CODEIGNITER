<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membre_model extends CI_Model {

	function __construct ()
	{
 
	parent:: __construct ();
	$this->load->database();
	
	}

	function verifier($log, $pass)
	{

		$query = $this->db->where(array('login'=>$log, 'mdp'=>$pass))->limit(1)->get('membres');
		return $query->result() ;
	}

	function getMembres()
	{

		$query = $this->db->get('membres');
		return $query->result() ;
	}

	function getLeMembre($id)
	{
		$query = $this->db->where(array('id'=>$id))->limit(1)->get('membres');
		return $query->result() ;
	}

	function suppMembre($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('membres');
	}

	function up($id, array $data){

		$this->db->where('id', $id) ;
		$this->db->update('membres', $data);


	}
	
}