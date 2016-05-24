<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membre_model extends CI_Model {

	function __construct ()
	{
 
	parent:: __construct ();
	$this->load->database();
	
	}

	//fonction qui vérifie si le mot de passe et le login correspondent
	function verifier($log, $pass)
	{

		$query = $this->db->where(array('login'=>$log, 'mdp'=>$pass))->limit(1)->get('membres');
		return $query->result() ;
	}

	//fonction qui reupère les visiteurs dans la bdd 
	function getMembres()
	{

		$query = $this->db->where(array('visiteur'=>True))->get('membres');
		return $query->result() ;
	}

	//fonction qui récupère un visiteur en fonction de son id
	function getLeMembre($id)
	{
		$query = $this->db->where(array('id'=>$id))->limit(1)->get('membres');
		return $query->result() ;
	}

	//fnoction qui supprime un visiteur de la bdd
	function suppMembre($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('membres');
	}

	//fonction qui met à jour les info du visiteur dans la bdd 
	function up($id, array $data){

		$this->db->where('id', $id) ;
		$this->db->update('membres', $data);


	}
	
}