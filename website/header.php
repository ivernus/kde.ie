<?php

/* Start the session, this is used for the language varible. This language variable is used to select in which language to load a page. */

session_start();

include ( "functions.php" ); 

/* Check the language, if it's not set, set it to English en */

$language = check_session_language(); 

/* Print the HTML headers */

print <<<HTML

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="author" content="kde.ie team">

<meta name="description" content="KDE K Desktop Environment in Ireland">
  		
<meta name="keywords" content="KDE,Ireland,K Desktop Environment,KDE Ireland,KDE in Ireland,Irish">
 	
<link rel="shortcut icon" href="images/kde.ico"><link rel="icon" href="images/kde.ico">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.3/gh-fork-ribbon.min.css" />

HTML;

print "<title>$page_title</title>";

print <<<HTML

  <style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);
    	@import url('files/main.css');
	@import url('files/lightbox.css');
  </style>
  
</head>

<body>

<div class="maincontent">

<a class="github-fork-ribbon" href="https://github.com/Conor0Callaghan/kde.ie" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>

HTML;

/* Print the menu, language dependent */

if ( "$language" == "en" )
{
	print_menu('en');
}
else
{
	print_menu('ie');
}

print <<<HTML

	<div class="spacer"></div>
  	<div class="spacer"></div>
HTML;

?>
