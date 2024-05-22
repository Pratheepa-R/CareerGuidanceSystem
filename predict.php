<?php
session_start();
$score=$_SESSION["SCORE"];
$input=array();
$index=0;
$domains=array("ARTIFICIAL INTELLIGENCE","PROGRAMMING","DATABASE MANAGEMENT","NETWORKING","CYBER SECURITY","ANALOG ELECTRONICS","DIGITAL ELECTRONICS","POWER ELECTRONICS","EMBEDDED SYSTEMS","COMMUNICATION ENGINEERING","THERMODYNAMICS AND HEAT TRANSFER","MECHANICS AND DYNAMICS","FLUID MECHANICS AND AERODYNAMICS","MATERIAL SCIENCE","MECHATRONICS AND CONTROL SYSTEMS","BIOMECHANICS","BIOMATERIALS","MEDICAL IMAGING","INSTRUMENTATION","SIGNAL PROCESSING","STRUCTURAL ENGINEERING","TRANSPORTATION ENGINEERING","GEOTECHNICAL ENGINEERING","ENVIRONMENTAL ENGINEERING","WATER RESOURCES ENGINEERING","PROCESS ENGINEERING","REACTION ENGINEERING","SEPARATION PROCESSES","TRANSPORT PHENOMENA","BIOCHEMICAL ENGINEERING");
foreach($domains as $x){
    $found=0;
    foreach($score as $key=>$value){
        if($x==$key){
            $found=1;
            if($value>=0 and $value<=3){
                $input[$index]=0;
                $index+=1;
            }
            else if($value>=4 and $value<=10){
                $input[$index]=1;
                $index+=1;
            }
            else if($value>=11 and $value<=17){
                $input[$index]=2;
                $index+=1;
            }
            else if($value>=18 and $value<=24){
                $input[$index]=3;
                $index+=1;
            }
        }
    }
    if($found==0){
        $input[$index]=0;
        $index+=1;
    }
}
$strings=array_map('strval',$input);
$stringinput=implode(" ",$strings);
exec("python predict.py \"$stringinput\"",$output,$returncode);
$result=$output[0];
session_unset();
?>
<html>
<head>
<title>Look for a Job</title>
<style>
body{
margin:0;
background-color:rgb(215,192,250);
}
#demo{
color:white;
font-size:50px;
position:absolute;
left:200px;
top:100px;
}
li{
color:white;
font-size:50px;
position:relative;
top:120px;
left:200px;
}
#home{
height:70px;
width:200px;
background-color:rgb(201,164,243);
border-radius:50px;
font-size:30px;
color:white;
font-weight:bold;
position:absolute;
top:550px;
left:980px;
transition:background-color 0.5s ease;
}
#home:hover{
color:black;
background-color:white;
cursor:pointer;
}
</style>
</head>
<body>
<div style="background-color:rgb(201,164,243); width:1300px; height:100px;">
<p style="position:absolute; left:20px; top:-30px; font-size:50px; font-weight:bold; color:white;">CareerNest</p>
</div>
<p id="demo">Suitable career options for you are :<br></p>
<ul>
<?php 
echo "<li>".htmlspecialchars($result)."</li>";
?>
</ul> 
<a href="home.html"><button id="home">HOME</button></a>
</body>
</html>
