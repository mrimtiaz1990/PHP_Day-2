<?php

// Nested if else (Check Single element at once.):

$user = "abcd";
$pass = 1234;

echo "Nested if else (Check Single element at once.): <br><br>";

if($user == "abcd"){
    if($pass == 1234){
        echo "Login Success";
    }
    else{
        echo "Password is wrong.";
    }
}
else{
    echo "User is wrong";
}
echo "<br><br><br>";

// Nested if else (Check Both element at the same time.):

echo "Nested if else (Check Both element at the same time.): <br><br>";

if ($user == "abcd" && $pass == 234) {
    echo "Login Success";
} else {
    echo "The User or Password is wrong.";
}


?>