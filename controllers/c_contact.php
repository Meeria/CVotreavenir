<?php namespace ctrl\contact;

function index() {
	return "afficher";
}

function afficher(){
	view("contact",[
		"titre" => "contact",
	]);
}

?>