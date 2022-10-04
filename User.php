<?php

    require_once("index.php");

    $User1 = new User("blue","Jesus","M",159);

    echo "<br>";
    echo User::$UserState;
    echo "<br>";
    echo $User1 -> getName();
    echo $User1 -> getProfile();
    echo "<br>";
    echo $User1 -> changeName("daniela");
    echo "<br>";
    echo User::$UserState;
    echo "<br>";
    echo $User1 -> getName();
    echo $User1 -> getProfile();
    echo "<br>";
?>