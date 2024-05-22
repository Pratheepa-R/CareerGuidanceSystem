<?php
session_start();
if(!isset($_SESSION["QUESTIONNO"])){
    $_SESSION["QUESTIONNO"]=0;
    $filtered=array();
    $index=0;
    $csvfile=fopen("passion.csv","r");
    while($data=fgetcsv($csvfile)){
        $filtered[$index]=$data;
        $index+=1;
    }
    $question=$filtered[$_SESSION["QUESTIONNO"]][0];
    $a=$filtered[$_SESSION["QUESTIONNO"]][1];
    $b=$filtered[$_SESSION["QUESTIONNO"]][2];
    $c=$filtered[$_SESSION["QUESTIONNO"]][3];
    $d=$filtered[$_SESSION["QUESTIONNO"]][4];
}
else{
    $filtered=array();
    $index=0;
    $csvfile=fopen("passion.csv","r");
    while($data=fgetcsv($csvfile)){
        $filtered[$index]=$data;
        $index+=1;
    }
    $question=$filtered[$_SESSION["QUESTIONNO"]][0];
    $a=$filtered[$_SESSION["QUESTIONNO"]][1];
    $b=$filtered[$_SESSION["QUESTIONNO"]][2];
    $c=$filtered[$_SESSION["QUESTIONNO"]][3];
    $d=$filtered[$_SESSION["QUESTIONNO"]][4];
}
?>
<html>
<head>
<title>Find your Passion</title>
<style>
body{
margin:0;
background-color:rgb(215,192,250);
}
#b1.active,#b2.active,#b3.active,#b4.active{
background-color:white;
color:black;
border:2px solid black;
}
#b1,#b2,#b3,#b4{
background-color:rgb(201,164,243);
font-size:25px;
color:white;
height:120px;
width:1120px;
transition:background-color 0.5s ease;
margin-bottom:20px;
position:relative;
top:180px;
left:20px;
border:none;
border-radius:100px;
text-align:left;
padding-left:50px;
}
#b1:hover,#b2:hover,#b3:hover,#b4:hover{
cursor:pointer;
}
#next{
height:70px;
width:200px;
background-color:rgb(201,164,243);
border-radius:50px;
font-size:30px;
color:white;
font-weight:bold;
position:absolute;
top:950px;
left:980px;
transition:background-color 0.5s ease;
}
#next:hover{
color:black;
background-color:white;
cursor:pointer;
}
</style>
<script>
function selectoption(buttonid){
  var buttons = document.getElementsByTagName("button");
  for(var i=0;i<buttons.length;i++){
   	if(buttons[i].id==buttonid){
		buttons[i].classList.toggle('active');
	}
	else{
		buttons[i].classList.remove('active');
	}
    }
}
function getoption(){
    var buttons = document.getElementsByTagName("button");
    for(var i=0;i<buttons.length;i++){
        if(buttons[i].classList.contains("active")){
            document.cookie="selectedoption="+buttons[i].id;
            break;
        }
    }
}
</script>
</head>
<body>
<div style="background-color:rgb(201,164,243); width:1263px; height:100px;">
<p style="position:absolute; left:20px; top:-30px; font-size:50px; font-weight:bold; color:white;">CareerNest</p>
</div>
<div style="border:2px solid black; height:750px; width:1170px; position:relative; left:50px; top:50px; border-radius:20px;">
<div style="background-color:rgb(201,164,243); width:1120px; height:120px; position:absolute; top:30px; left:25px; border-radius:20px;">
<p style="position:absolute; left:20px; top:10px; font-size:30px; color:white;"><?php echo $question; ?></p>
</div>
<button id="b1" onclick="selectoption('b1')"><?php echo $a; ?></button>
<button id="b2" onclick="selectoption('b2')"><?php echo $b; ?></button>
<button id="b3" onclick="selectoption('b3')"><?php echo $c; ?></button>
<button id="b4" onclick="selectoption('b4')"><?php echo $d; ?></button>
</div>
<form>
<button id="next" onclick="getoption()" formaction="passionscore.php">NEXT</button>
</form>
</body>
</html>
