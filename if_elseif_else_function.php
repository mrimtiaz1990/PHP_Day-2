<?php

// if, elseif & else function.
// Check the Day and Print the Day.

$c_day = 5;

if($c_day == "fri" || $c_day == 7){
echo "This is Friday";
}
elseif($c_day =="sat" || $c_day == 1){
    echo "This is Saturday";
    }
    elseif($c_day =="sun" || $c_day == 2){
        echo "This is Sunday";
        }
        elseif($c_day =="mon" || $c_day == 3){
            echo "This is Monday";
            }
            elseif($c_day =="tues" || $c_day == 4){
                echo "This is Tuesday";
                }
                elseif($c_day =="wed" || $c_day == 5){
                    echo "This is Wednessday";
                    }
                    elseif($c_day =="thu" || $c_day == 6){
                        echo "This is Thursday";
                        }
                        else{
                            echo "Null";
                        }

echo "<br><br><br>";

// if elseif and else to find month automated:

$Month = date('m');

if($Month == 1){
    echo 'January';
    }
    elseif($Month ==2){
        echo 'February';
    }
    elseif($Month ==3){
        echo 'March';
        }
        elseif($Month ==4){
            echo 'April';
            }
            elseif($Month ==5){
                echo 'May';
                }
                elseif($Month ==6){
                    echo 'June';
                    }
                    elseif($Month ==7){
                        echo 'July';
                        }
                        elseif($Month ==8){
                            echo 'Aughst';
                            }
                            elseif($Month ==9){
                                echo 'September';
                                }
                                elseif($Month ==10){
                                    echo 'October';
                                    }
                                    elseif($Month ==11){
                                        echo 'November';
                                        }
                                        elseif($Month ==12){
                                            echo 'Decmber';
                                            }
                                            else {
                                                echo 'Error';
                                                }

    ?>