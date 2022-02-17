<?php 
    session_start();

    /* Initialization of counter for score and number of questions */

    if(isset($_SESSION["score"]) == false && isset($_SESSION["question"]) == false) {
        $_SESSION["score"] = 0;
        $_SESSION["question"] = 0;
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple quiz!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>