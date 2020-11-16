
<?php
    echo "<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">";

    echo "<h1>Your Receipt</h1>";
    $rac = $_POST["racquet_quantity"];
    $shoe = $_POST["shoe_quantity"];
    $dam =  $_POST["damper_quantity"];
    $username = $_POST["email"];
    $password = $_POST["passwords"];
    $shipping = $_POST["shipping"];
    echo "<h2> New User!</h2>";
    echo "Your current password is = $password"; 
    echo "<h1> Items ordered </h1>";

    echo "<h3> Racquet quanity = $rac priced at 100 each</h3>";
    echo "<h3> Shoe quanity = $shoe priced at 50 each</h3>";
    echo "<h3> dam quanity = $dam priced at 10 each</h3>";
    $shipPrice = 0;
    if($shipping == "free") {echo "<h3>Shipping Free</h3>";}
    if($shipping == "ovn") {echo "<h3>Shipping  overnight  - \$50.00</h3>"; $shipPrice = 50;}
    if($shipping == "sd") {echo "<h3>Shipping  3 days - \$5.00</h3>"; $shipPrice = 5;}
    $total = $rac *100 + $shoe * 50 + $dam *10;






?>
