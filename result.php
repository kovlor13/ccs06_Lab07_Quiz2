<?php

require "vendor/autoload.php";
require "download.php";

// 4.

use App\QuestionManager;

$score = null;

try {
    $manager = new QuestionManager;
    $manager->initialize();


    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers');
    }
    $score = $manager->computeScore($_SESSION['answers']);
    $_SESSION['Score'] = $score;
    $_SESSION['Qnumber'] = $manager->getQuestionSize();
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
</head>
<body>

<h1>Thank You</h1>

<p style="color: black">
    You've completed the exam.
</p>

<h4>
	<span style="color: black">
    Congratulations <?php echo $_SESSION['user_fullname']; ?>!
    </span>
	<span style="color: red">
    	<?php echo "(". $_SESSION[ 'user_email' ]. ")"; ?>!<br>
    	</span>
		
    		Your score is 
			<span style="color: blue">
				<?php echo $score; ?>
    							</span>
    			 					out of 
									 <span style="color: red">
									 	<?php echo $manager->getQuestionSize() ; ?>
									 		</span>
									 			<br>
												 <h1>         </h1>
												 <h4> <span style="color: red"> Your Answers </span> </h4>
												 
												 
											
												<?php $ex = $manager->Question($_SESSION["answers"]);?> </h4>
<br>

<form action = "result.php" method ="POST">
<input type="submit" value="Click here to download the results." name="download">
</form>

</body>
</html>


<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
var_dump($_POST);
?>
</pre>