<?php

// Switch Functon (Same as if_elseif_else_Function):

$day = "mon";
switch($day){
    case 'fri':
        echo "Today is Friday";
        break;
        case 'sat':
            echo "Today is Saturday";
            break;
            case 'sun':
                echo "Today is Sunday";
                break;
                case 'mon':
                    echo "Today is Monday";
                    break;
                    case 'tue':
                        echo "Today is Tuesday";
                        break;
                        case 'wed':
                            echo "Today is Wednessday";
                            break;
                            case 'thu':
                                echo "Today is Thursday";
                                break;
                                default:
                                    echo "Wrong Day";
                                    break;
}

?>