<?php namespace ctrl\blog;

function index() {
	return "afficher";
}

function afficher(){
	view("blog",[
		"titre" => "blog",
	]);
}

?>