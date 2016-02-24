 <?php
//access the global array called $_POST to get the values from the text fields
$one = $_POST["one"];
$two = $_POST["two"];
$three = $_POST["three"];
$four = $_POST["four"];
$five = $_POST["five"];
$score = 0;

echo "Question One: What is 1+1? <br> You answered: " . $one . "<br> Correct answer: 2 <br><br>";
echo "Question Two: What is 1-1? <br> You answered: " . $two . "<br> Correct answer: 0 <br><br>";
echo "Question Three: What is 1*1? <br> You answered: " . $three . "<br> Correct answer: 1 <br><br>";
echo "Question Four: What is 1/1? <br> You answered: " . $four . "<br> Correct answer: 1 <br><br>";
echo "Question Five: What is 1%1? <br> You answered: " . $five . "<br> Correct answer: 0 <br><br>";

if($one=="2"){
	$score+=1;
}
if($two=="0"){
	$score+=1;
}
if($three=="1"){
	$score+=1;
}
if($four=="1"){
	$score+=1;
}
if($five=="0"){
	$score+=1;
}

echo "You answered " . $score . " questions correctly. <br>";
echo "Your score is ".$score*20 ."%<br><br>";

?>
<html>
	<head>
		<title>Grades</title>
		<link href="448.css"
			rel="stylesheet"
			type="text/css"/>
	</head>
	<body>
		<a href="http://people.eecs.ku.edu/~mneises/448/Quiz.html">Back</a>
	</body>
</html>

