<?php namespace ctrl\premium;

function index() {
	return "afficher";
}

function afficher(){
	view("premium",[
		"titre" => "premium",
	]);
}

?>