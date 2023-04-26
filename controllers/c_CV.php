<?php namespace ctrl\CV;

function index() {
	return "afficher";
}

function afficher(){
	view("CV",[
		"titre" => "CV",
	]);
}

?>