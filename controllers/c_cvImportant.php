<?php namespace ctrl\cvImportant;

function index() {
	return "afficher";
}

function afficher(){
	view("cvImportant",[
		"titre" => "cvImportant",
	]);
}

?>