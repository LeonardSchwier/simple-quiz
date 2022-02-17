<?php

include("top.php");

	if(isset($_SESSION["score"]) !== false && isset($_SESSION["question"]) !== false) {
		$score = $_SESSION["score"];
		$noQuestions = $_SESSION["question"];
		$percent = $score/$noQuestions;

		if($noQuestions == 0)
		{
			echo 'No answers saved. Please restart.';
		}

		echo "<center><h1>You got ", $score, " out of ", $noQuestions, " questions correct!</h1>";

	} else {
		echo 'No answers saved. Please restart.';
	}

	session_unset();
	?>

    <a href="../">Restart</a>

<?php
	include("bottom.php");
?>