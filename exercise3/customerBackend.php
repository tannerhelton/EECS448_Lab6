<html>
    <head>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            echo "<h1>Welcome ".$user."!</h1>";
            echo "<p>You logged in with password: ".$pass."</p>";
        ?> 
    </body>
</html>