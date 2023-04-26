<?php namespace ctrl\packs;

function index() {
	return "afficher";
}

function afficher(){
	view("packs",[
		"titre" => "packs",
	]);
}

?>