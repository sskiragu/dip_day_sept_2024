<?php

//Grading system
$marks = 85;
if($marks >= 90){
    echo "Grade A";
}elseif($marks >= 80){
    echo "Grade B";
}elseif($marks >= 70){
    echo "Grade C";
}elseif($marks >= 60){
    echo "Grade D";
}elseif($marks >= 50){
    echo "Grade E";
}elseif($marks >= 40){
    echo "Grade F";
}else{
    echo "Grade G";
}
?>