<?php
session_start();
$useranswer=$_COOKIE["selectedoption"];
$options=array("b1"=>"a","b2"=>"b","b3"=>"c","b4"=>"d");
if($_SESSION["QUESTIONNO"]==0){
    $_SESSION["CAREEROPTION"]=array("Software Engineering"=>0,"Mechanical Engineering"=>0,"Civil Engineering"=>0,"Data Science"=>0,"Electrical Engineering"=>0,"Environmental Engineering"=>0,"Creative Technology Fields"=>0);
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==1){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Creative Technology Fields"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==2){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Creative Technology Fields"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==3){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Creative Technology Fields"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==4){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==5){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Creative Technology Fields"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Creative Technology Fields"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==6){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==7){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Creative Technology Fields"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==8){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    $_SESSION["QUESTIONNO"]+=1;
}
else if($_SESSION["QUESTIONNO"]==9){
    if($options[$useranswer]=="a"){
        $_SESSION["CAREEROPTION"]["Mechanical Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
    }
    else if($options[$useranswer]=="b"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Data Science"]+=1;
    }
    else if($options[$useranswer]=="c"){
        $_SESSION["CAREEROPTION"]["Software Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Electrical Engineering"]+=1;
    }
    else if($options[$useranswer]=="d"){
        $_SESSION["CAREEROPTION"]["Civil Engineering"]+=1;
        $_SESSION["CAREEROPTION"]["Environmental Engineering"]+=1;
    }
    header("Location:passionresult.php");
    exit();
}
header("Location:passioninitialize.php");
?>