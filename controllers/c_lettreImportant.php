<?php namespace ctrl\lettreImportant;

function index() {
	return "afficher";
}

function afficher(){
	view("lettreImportant",[
		"titre" => "lettreImportant",
	]);
}

?>