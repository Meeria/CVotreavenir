<?php namespace ctrl\starter;

function index() {
	return "afficher";
}

function afficher(){
	view("starter",[
		"titre" => "starter",
	]);
}

?>