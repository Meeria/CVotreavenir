<?php namespace ctrl\clientAccount;

function index() {
	return "afficher";
}

function afficher(){
	view("clientAccount",[
		"titre" => "clientAccount",
	]);
}

?>