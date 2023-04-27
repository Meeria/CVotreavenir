<?php namespace ctrl\profil;

function index() {
	return "afficher";
}

function afficher(){
	view("profil",[
		"titre" => "profil",
	]);
}

?>