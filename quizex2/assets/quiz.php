<?php
$answerOne = $_POST['q1'];
$answerTwo = $_POST['q2'];
$answerThree = $_POST['q3'];
$answerFour = $_POST['q4'];
$answerFive = $_POST['q5'];
$score = 0; 

if ($answerOne == "Arsenal")
$score += 20;
if ($answerTwo == "Poultry")
$score += 20;
if ($answerThree == "28")
$score += 20;
if ($answerFour == "Pink")
$score += 20;
if ($answerFive == "Bora Bora")
$score += 20;

echo "What Is My Favorite Soccer Team? <br>";
echo "Your Answer: " . $answerOne . "<br>";
echo "The Correct Answer Is: Arsenal<br><br>";
echo "What Is My favorite Source Of Protein? <br>";
echo "Your Answer: " . $answerTwo . "<br>";
echo "The Correct Answer Is: Poultry<br><br>";
echo "How Old Am I? <br>";
echo "Your Answer: " . $answerThree . "<br>";
echo "The Correct Answer Is: 28<br><br>";
echo "What Is My Favorite Color? <br>";
echo "Your Answer: " . $answerFour . "<br>";
echo "The Correct Answer Is: Pink<br><br>";
echo "Where Did I Honeymoon?<br>";
echo "Your Answer: " . $answerFive . "<br>";
echo "The Correct Answer Is: Bora Bora<br><br>";

echo "Your Score: " . $score . " / 100";
?>