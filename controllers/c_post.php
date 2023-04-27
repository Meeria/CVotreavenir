<?php namespace ctrl\post;

function index() {
	return "afficher";
}

function afficher(){
	view("post",[
		"titre" => "post",
	]);
}

?>