<?php
$q1 = $_POST["1"];
$q2 = $_POST["2"];

echo "<p>Questions and Answers:</p>";
echo "<br>Question 1: What's the acronym for HyperText Markup Language";
echo "<br>&nbsp;You answered: "+$q1;
echo "<br>&nbsp;Correct answer: HTML";
echo "<br>Question 2: What language is being used for this form?";
echo "<br>&nbsp;You answered: "+$q2;
echo "<br>&nbsp;Correct answer: PHP";
?>