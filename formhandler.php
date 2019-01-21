<?php
	

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['tel'];
    $state = $_GET['state'];
    
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    if ($phone != "") {
        echo "Phone: $phone<br>";
    }
    if ($state !="") {
        echo "State: $state<br>";
    }


?>