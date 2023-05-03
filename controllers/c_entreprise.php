<?php namespace ctrl\entreprise;

function index() {
	return "afficher";
}

function afficher(){
	view("entreprise",[
		"titre" => "entreprise",
	]);
}

?>