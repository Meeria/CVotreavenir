<?php namespace ctrl\realisations;

function index() {
	return "afficher";
}

function afficher(){
	view("realisations",[
		"titre" => "realisations",
	]);
}

?>