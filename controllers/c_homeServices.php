<?php namespace ctrl\homeServices;

function index() {
	return "afficher";
}

function afficher(){
	view("homeServices",[
		"titre" => "homeServices",
	]);
}

?>