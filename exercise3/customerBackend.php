<html>
    <head>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $i1q = $_POST["i1q"];
            $i2q = $_POST["i2q"];
            $i3q = $_POST["i3q"];
            $shipping = $_POST["shipping"];
            $total = $i1q*150000+$i2q*230000+$i3q*4500000;
            echo "<h1>Welcome ".$user."!</h1>";
            echo "<p>You logged in with password: ".$pass."</p>";
        ?>
        <table>
            <tr class="header">
                <td></td>
                <td>Quantity</td>
                <td>Cost Per Item</td>
                <td>Subtotal</td>
            </tr>
            <tr>
                <td>Porsche 911</td>
                <td><?php echo $i1q;?></td>
                <td>$150000</td>
                <td>$<?php echo $i1q*150000;?></td>
            </tr>
            <tr>
                <td>McLaren 600LT</td>
                <td><?php echo $i2q;?></td>
                <td>$230000</td>
                <td>$<?php echo $i2q*230000;?></td>
            </tr>
            <tr>
                <td>Ferrari laFerrari Aperta</td>
                <td><?php echo $i3q;?></td>
                <td>$4500000</td>
                <td>$<?php echo $i3q*4500000;?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td colspan="2"><?php echo $shipping;?></td>
                <td>$
                    <?php
                        if($shipping == "Free 7 day") {
                            echo "$0";
                        } else if ($shipping == "$50.00 over night") {
                            echo "$50";
                            $total += 50;
                        } else if ($shipping == "$50.00 over night") {
                            echo "$5";
                            $total += 5;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">Total Cost</td>
                <td>$<?php echo $total;?></td>
            </tr>
        </table>
    </body>
</html>