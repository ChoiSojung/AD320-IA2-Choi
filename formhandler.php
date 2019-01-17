<?php
	

if ($_GET && isset($_GET['submit'], $_GET['name'], $_GET['email'],$_GET['tel'],$_GET['state'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['tel'];
    $state = $_GET['state'];
    
    echo $name;
    echo $email;
    echo $phone;
    echo $state;
}
    

?>