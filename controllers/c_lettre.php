<?php namespace ctrl\lettre;

function index() {
	return "afficher";
}

function afficher(){
	view("lettre",[
		"titre" => "lettre",
	]);
}

?>