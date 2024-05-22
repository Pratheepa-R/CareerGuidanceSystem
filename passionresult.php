<?php
session_start();
$maxvalue=max($_SESSION["CAREEROPTION"]);
$options=array();
$index=0;
foreach($_SESSION["CAREEROPTION"] as $key=>$value){
    if($value==$maxvalue){
        $options[$index]=$key;
        $index+=1;
    }
}
session_unset();
?>
<html>
<head>
<title>Find your Passion</title>
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
foreach($options as $x){
    echo "<li>".htmlspecialchars($x)."</li>";
}
?>
</ul> 
<a href="home.html"><button id="home">HOME</button></a>
</body>
</html>
