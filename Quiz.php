<html>
    <body>
        <h1>Questions and Answers:</h1>
        <?php
        $q1 = $_POST["1"];
        $q2 = $_POST["2"];
        echo "<br>Question 1: What's the acronym for HyperText Markup Language";
        echo "<br>     You answered: ".$q1;
        echo "<br>     Correct answer: HTML";
        echo "<br>Question 2: What language is being used for this form?";
        echo "<br>     You answered: ".$q2;
        echo "<br>     Correct answer: PHP";
        ?>
    </body>
</html>