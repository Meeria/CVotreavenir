<?php namespace ctrl\pro;

function index() {
	return "afficher";
}

function afficher(){
	view("pro",[
		"titre" => "pro",
	]);
}

?>