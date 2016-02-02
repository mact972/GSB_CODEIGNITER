<?php

$this->load->helper('form');
$this->load->helper('html');
$this->load->library('form_validation');

echo validation_errors(); 

echo form_open('email/add');

echo heading('Login :', 3);
echo form_input('login', '');

echo heading('Email :', 3);
echo form_input('email1');

echo heading('Mot de passe :', 3);
echo form_input('mdp1', '');

echo heading('Répétez Mot de passe :', 3);
echo form_input('mdp2', '');

echo form_submit('valider', 'Valider');

