<?php namespace ctrl\formPost;

function index() {
	return "afficher";
}

function afficher(){
	view("formPost",[
		"titre" => "formPost",
	]);
}

?>