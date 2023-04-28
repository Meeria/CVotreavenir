<?php namespace ctrl\mail;

function index() {
	return "afficher";
}

function afficher(){
	view("mail",[
		"titre" => "mail",
	]);
}

?>