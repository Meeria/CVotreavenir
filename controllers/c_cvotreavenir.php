<?php namespace ctrl\cvotreavenir;

function index() {
	return "afficher";
}

function afficher(){
	view("cvotreavenir",[
		"titre" => "cvotreavenir",
	]);
}

?>