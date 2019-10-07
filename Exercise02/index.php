<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$addition = $_POST["addition"];
$subtraction = $_POST["subtraction"];
$division = $_POST["division"];
$multiplication = $_POST["multiplication"];
$multiple = $_POST["multiple"];

$percent = 0;
$numCorrect = 0;

if($addition == "4") {
    $percent = $percent + 20;
    $numCorrect = $numCorrect + 1;
}
if($subtraction == "3") {
    $percent = $percent + 20;
    $numCorrect = $numCorrect + 1;
}
if($division == "1") {
    $percent = $percent + 20;
    $numCorrect = $numCorrect + 1;
}
if($multiplication == "4") {
    $percent = $percent + 20;
    $numCorrect = $numCorrect + 1;
}
if($multiple == "2") {
    $percent = $percent + 20;
    $numCorrect = $numCorrect + 1;
}

echo "Question 1: What is 2 + 2?" . "<br>";
echo "You answered: " . $addition . "<br>";
echo "Correct answer: 4" . "<br><br>";

echo "Question 2: What is 6 - 3?" . "<br>";
echo "You answered: " . $subtraction . "<br>";
echo "Correct answer: 3" . "<br><br>";

echo "Question 3: What is 10 / 10?" . "<br>";
echo "You answered: " . $division . "<br>";
echo "Correct answer: 1" . "<br><br>";

echo "Question 4: What is 2 * 2?" . "<br>";
echo "You answered: " . $multiplication . "<br>";
echo "Correct answer: 4" . "<br><br>";

echo "Question 5: What is (3 + 1) / 2?" . "<br>";
echo "You answered: " . $multiple . "<br>";
echo "Correct answer: 2" . "<br><br>";


echo "Number of Questions Correct: " . $numCorrect . "<br>";
echo "Percent Correct: " . $percent . "%";

?>