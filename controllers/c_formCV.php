<?php namespace ctrl\formCV;

function index() {
	return "afficher";
}

function afficher(){
	view("formCV",[
		"titre" => "formCV",
	]);
}

?>