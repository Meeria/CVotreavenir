<?php namespace ctrl\formLettre;

function index() {
	return "afficher";
}

function afficher(){
	view("formLettre",[
		"titre" => "formLettre",
	]);
}

?>