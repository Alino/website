<?php

if(isSet($_GET['lang']))
{
	$language = $_GET['lang'];
	$_SESSION['lang'] = $language;
	setcookie('lang', $language, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
	$language = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
	$language = $_COOKIE['lang'];
}
else
{
	if (strpos($_SERVER[HTTP_HOST], 'dzieje-khorinis.pl') !== false)
		$language = 'pl';
	else
		$language = 'en';
}

$lang = json_decode(file_get_contents("languages/".$language.".json"), true);

?>
