<?php namespace ctrl\services;

function index() {
	return "afficher";
}

function afficher(){
	view("services",[
		"titre" => "services"
	]);
}



?>