<html>
    <body>
        <h1>Questions and Answers:</h1>
        <?php
        $q1 = $_POST["1"];
        $q2 = $_POST["2"];
        $correct = 0;
        echo "<br>Question 1: What's the acronym for HyperText Markup Language";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q1;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: HTML";
        if($q1 == "HTML") {
            $correct++;
        }
        echo "<br><br>Question 2: What language is being used for this form?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q2;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: PHP";
        if($q2 == "PHP") {
            $correct++;
        }

        echo "<h3>You answered a total of:".$correct." correctly</h3>";
        echo "<h4>Your score: ".($correct*20)."%</h4>";
        ?>
    </body>
</html>