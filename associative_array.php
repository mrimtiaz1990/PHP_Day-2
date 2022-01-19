<?php

// Associative Array

$Contact = array(
    array("Name"=>"Mr-A", "Phone"=>123,"Email"=>"a@gmail.com"),
    array("Name" => "Mr-B", "Phone" => 234, "Email" => "b@gmail.com"),
    array("Name" => "Mr-C", "Phone" => 345, "Email" => "c@gmail.com"),
    array("Name" => "Mr-D", "Phone" => 456, "Email" => "d@gmail.com"),
    array("Name" => "Mr-E", "Phone" => 567, "Email" => "e@gmail.com"),
    array("Name" => "Mr-F", "Phone" => 678, "Email" => "f@gmail.com"),
    array("Name" => "Mr-G", "Phone" => 789, "Email" => "g@gmail.com"),
    array("Name" => "Mr-H", "Phone" => 890, "Email" => "h@gmail.com"),
    array("Name" => "Mr-I", "Phone" => 012, "Email" => "i@gmail.com"),
    array("Name" => "Mr-J", "Phone" => 123, "Email" => "j@gmail.com"),
    array("Name" => "Mr-K", "Phone" => 234, "Email" => "k@gmail.com"),
    array("Name" => "Mr-L", "Phone" => 345, "Email" => "l@gmail.com"),
    array("Name" => "Mr-M", "Phone" => 456, "Email" => "m@gmail.com"),
    array("Name" => "Mr-N", "Phone" => 567, "Email" => "n@gmail.com")
    );
foreach ($Contact as $s_Contact){
    foreach ($s_Contact as $key => $value){
        echo "$key: $value <br>";
    }
    echo "<br>";
};

?>