<?php

include("top.php");

if(isset($_POST['submit']))
{
	$_SESSION["question"]++;	

	/* "b" to be adjusted based on true answer from input form below */
	if($_POST['answer'] == "b")
	{
		$_SESSION["score"]++;
		
	}
	elseif($_POST['answer'] == "")
	{
		echo "Please select a question!";
	}
	if($_POST['answer'] != "")
	{
	/* To be adjusted with filename of next question. For last question, to be adjusted with final.php */
	echo '<meta http-equiv="refresh" content="0; URL=./final.php">';
	}
}

?>
<h1>What is the right answer (it is b)?</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="radio" name="answer" value="a"> 1015 <br>
	<input type="radio" name="answer" value="b"> 900 <br>
	<input type="radio" name="answer" value="c"> 300 <br>
	<input type="radio" name="answer" value="d"> 1800 <br>
	<br/>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
	include("bottom.php");
?>