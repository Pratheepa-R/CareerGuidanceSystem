<?php
    session_start();
    $useranswer=$_COOKIE["selectedoption"];
    $options=array("b1"=>"a","b2"=>"b","b3"=>"c","b4"=>"d");
    if($options[$useranswer]==$_SESSION["ANSWER"]){
        $REMAINING=$_SESSION["REMAINING"];
        $domain=$_SESSION["DOMAIN"];
        $REMAINING[$domain]=$REMAINING[$domain]-1;
        $QUESTIONLEVEL=$_SESSION["QUESTIONLEVEL"];
        $score=$_SESSION["SCORE"];
        if($QUESTIONLEVEL[$domain]["currentlevel"]=="easy"){
            $score[$domain]+=1;
        }
        else if($QUESTIONLEVEL[$domain]["currentlevel"]=="medium"){
            $score[$domain]+=2;
        }
        else if($QUESTIONLEVEL[$domain]["currentlevel"]=="hard"){
            $score[$domain]+=3;
        }
        $QUESTIONLEVEL[$domain]["correct"]+=1;
        if($QUESTIONLEVEL[$domain]["correct"]==2 and $QUESTIONLEVEL[$domain]["currentlevel"]=="easy"){
            $QUESTIONLEVEL[$domain]["currentlevel"]="medium";
            $QUESTIONLEVEL[$domain]["lost"]=0;
            $QUESTIONLEVEL[$domain]["correct"]=0;
        }
        else if($QUESTIONLEVEL[$domain]["correct"]==2 and $QUESTIONLEVEL[$domain]["currentlevel"]=="medium"){
            $QUESTIONLEVEL[$domain]["currentlevel"]="hard";
            $QUESTIONLEVEL[$domain]["lost"]=0;
            $QUESTIONLEVEL[$domain]["correct"]=0;
        }
        if($REMAINING[$domain]==0){
            unset($REMAINING[$domain]);
            unset($QUESTIONLEVEL[$domain]);
        }
        $_SESSION["QUESTIONLEVEL"]=$QUESTIONLEVEL;
        $_SESSION["REMAINING"]=$REMAINING;
        $_SESSION["SCORE"]=$score;
    }
    else{
        $REMAINING=$_SESSION["REMAINING"];
        $domain=$_SESSION["DOMAIN"];
        $REMAINING[$domain]=$REMAINING[$domain]-1;
        $QUESTIONLEVEL=$_SESSION["QUESTIONLEVEL"];
        $QUESTIONLEVEL[$domain]["lost"]+=1;
        if($QUESTIONLEVEL[$domain]["lost"]==2 and $QUESTIONLEVEL[$domain]["currentlevel"]=="hard"){
            $QUESTIONLEVEL[$domain]["currentlevel"]="medium";
            $QUESTIONLEVEL[$domain]["lost"]=0;
            $QUESTIONLEVEL[$domain]["correct"]=0;
        }
        else if($QUESTIONLEVEL[$domain]["lost"]==2 and $QUESTIONLEVEL[$domain]["currentlevel"]=="medium"){
            $QUESTIONLEVEL[$domain]["currentlevel"]="easy";
            $QUESTIONLEVEL[$domain]["lost"]=0;
            $QUESTIONLEVEL[$domain]["correct"]=0;
        }
        else if(($QUESTIONLEVEL[$domain]["lost"]==3 and $QUESTIONLEVEL[$domain]["currentlevel"]=="easy") or $REMAINING[$domain]==0){
            unset($REMAINING[$domain]);
            unset($QUESTIONLEVEL[$domain]);
        }
        $_SESSION["QUESTIONLEVEL"]=$QUESTIONLEVEL;
        $_SESSION["REMAINING"]=$REMAINING;
    }
    header("Location:initialize.php");
?>