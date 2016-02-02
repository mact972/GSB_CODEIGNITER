<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moncontroleur extends CI_Controller {

public function index()
	{
		$data['titre']="MA SUPER PAGE !!!";
		$bloctexte = "toto et titi sava bien ? et comment ca va le travail";
		$data['bloc'] = array('bloc'=>$bloctexte); 
		$this->load->view('layout/layout', $data);

	}


}