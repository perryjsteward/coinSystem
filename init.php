<?php
session_start(); //starts a session on acccess to site
/*
    The onfig array allows for global settings through out the project.
*/

//config sets all global links and navigation constants, removes repetition later
$urls = array (
	'root_path' => $_SERVER['DOCUMENT_ROOT']."coinSystem", //rootpath is www within wamp so set as project name
	"root" => "http://localhost/coinSystem",
	'public' => '/public', //used for href, POST actions
	'application' => '/application',
	'res' => '/res'
);

//set navigation CONSTANTS


defined("ROOT_PATH")
    or define("ROOT_PATH", $urls['root_path']);

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", $urls['root_path'] . $urls['res'] . '/templates');//sets template path within file directory

defined("MODELS")
    or define("MODELS", $urls['root_path'] . $urls['application'] . '/models');//sets models
	
defined("VIEWS")
    or define("VIEWS", $urls['root_path'] . $urls['application'] . '/views');//sets views
	
defined("CONTROLLERS")
    or define("CONTROLLERS", $urls['root_path'] . $urls['application'] . '/controllers');//sets views

?>