<?php

// if, elseif & else function.
// Check the Day and Print the Day.

$c_day = date('w');

if($c_day == 1){
echo "Today is Monday";
}
elseif($c_day == 2){
    echo "This is Tuesday";
    }
    elseif($c_day == 3){
        echo "This is Wednessday";
        }
        elseif($c_day == 4){
            echo "This is Thursday";
            }
            elseif($c_day == 5){
                echo "This is Friday";
                }
                elseif($c_day == 6){
                    echo "This is Saturday";
                    }
                    elseif($c_day == 7){
                        echo "This is Sunday";
                        }
                        else{
                            echo "Null";
                        }
echo " and ";

// if elseif and else to find month automated:

$Month = date('m');

if($Month == 1){
    echo 'Month is January';
    }
    elseif($Month ==2){
        echo 'Month is February';
    }
    elseif($Month ==3){
        echo 'Month is March';
        }
        elseif($Month ==4){
            echo 'Month is April';
            }
            elseif($Month ==5){
                echo 'Month is May';
                }
                elseif($Month ==6){
                    echo 'Month is June';
                    }
                    elseif($Month ==7){
                        echo 'Month is July';
                        }
                        elseif($Month ==8){
                            echo 'Month is Aughst';
                            }
                            elseif($Month ==9){
                                echo 'Month is September';
                                }
                                elseif($Month ==10){
                                    echo 'Month is October';
                                    }
                                    elseif($Month ==11){
                                        echo 'Month is November';
                                        }
                                        elseif($Month ==12){
                                            echo 'Month is Decmber';
                                            }
                                            else {
                                                echo 'Error';
                                                }

    ?>