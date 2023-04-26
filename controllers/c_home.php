<?php namespace ctrl\home;

function index() {
	return "afficher";
}

function afficher(){
	view("home",[
		"titre" => "home"
	]);
}

?>