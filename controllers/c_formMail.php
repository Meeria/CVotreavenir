<?php namespace ctrl\formMail;

function index() {
	return "afficher";
}

function afficher(){
	view("formMail",[
		"titre" => "formMail",
	]);
}

?>