<?php
//access the global array called $_POST to get the values from the text fields
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$a1 = 'Any movie starring Kate Beckinsale';
$a2 = 'Kate Beckinsale';
$a3 = "It doesn't matter as long as Kate is in the movie.";
$a4 = 'Kate Beckinsale';
$a5 = 'Kate Beckinsale';

$score = 0;

echo "Question 1: What is the greatest movie of all time?<br>";
echo "You answered: " . $q1."<br>";
echo "Correct answer: ".$a1."<br>";

echo "<br>Question 2: Who is the best actor/actress of all time?<br>";
echo "You answered: " . $q2."<br>";
echo "Correct answer: ".$a2."<br>";

echo "<br>Question 3: What are the three must have snacks at the movie theater?<br>";
echo "You answered: " . $q3."<br>";
echo "Correct answer: ".$a3."<br>";

echo "<br>Question 4: You have to pick one person to go to the movies with. Who do you pick?<br>";
echo "You answered: " . $q4."<br>";
echo "Correct answer: ".$a4."<br>";

echo "<br>Question 5: You have to pick one person to go to the movies with. Who do you pick?<br>";
echo "You answered: " . $q5."<br>";
echo "Correct answer: ".$a5."<br>";

if($q1 == $a1) {
  $score = $score + 20;
}
if($q2 == $a2) {
  $score = $score + 20;
}
if($q3 == $a3) {
  $score = $score + 20;
}
if($q4 == $a4) {
  $score = $score + 20;
}
if($q5 == $a5) {
  $score = $score + 20;
}

echo "You scored ".$score."% on the quiz.";

?>
