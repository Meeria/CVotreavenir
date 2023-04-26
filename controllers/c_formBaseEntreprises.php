<?php namespace ctrl\formBaseEntreprises;

function index() {
	return "afficher";
}

function afficher(){
	view("formBaseEntreprises",[
		"titre" => "formBaseEntreprises",
	]);
}

?>