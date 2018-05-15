<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '626177827748860',
		'app_secret' => '05f479adac6ba19523b4e3cb086c8387',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>