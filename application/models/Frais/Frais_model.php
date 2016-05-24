<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frais_model extends CI_Model {

	function __construct ()
	{
 
	parent:: __construct ();
	$this->load->database();
	
	}

	//fonction qui permet de récupérer les mois selon 
	function getMonth($id)
	{

		$query = $this->db->where(array('idMembres'=>$id, 'idEtat !='=>'VA'))->get('fichefrais');
		return $query->result();
	}

	//fonction qui permet de récupérer les fiches frais qui reste à valider selon le mois. 
	function getficheFrais($id, $mois)
	{

		$query = $this->db->where(array('idMembres'=>$id, 'mois'=>$mois))->get('lignefraisforfait');
		return $query->result();
	}

}