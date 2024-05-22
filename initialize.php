<?php
session_start();
if(isset($_COOKIE["selectedDomains"])){
    $values=$_COOKIE["selectedDomains"];
    $array=explode(",",$values);
    if(!isset($_SESSION["QUESTIONLEVEL"])){
        $stage=array("currentlevel"=>"easy","lost"=>0,"correct"=>0);
        $QUESTIONLEVEL=array();
        $REMAINING=array();
        $_SESSION["SCORE"]=array();
        foreach($array as $x){
            $QUESTIONLEVEL[$x]=$stage;
            $REMAINING[$x]=10;
            $_SESSION["SCORE"][$x]=0;
        }
        $_SESSION["QUESTIONLEVEL"]=$QUESTIONLEVEL;
        $_SESSION["REMAINING"]=$REMAINING;
    }
}
    $QUESTIONLEVEL=$_SESSION["QUESTIONLEVEL"];
    if(count($QUESTIONLEVEL)==0){
        header("Location:predict.php");
        exit();
    }
    $domain=array_rand($QUESTIONLEVEL);
    $filename=array("ARTIFICIAL INTELLIGENCE"=>"AI.csv","PROGRAMMING"=>"Programming.csv","NETWORKING"=>"Networking.csv","DATABASE MANAGEMENT"=>"DBMS.csv","CYBER SECURITY"=>"cybersecurity.csv","ANALOG ELECTRONICS"=>"analogElectronics.csv","DIGITAL ELECTRONICS"=>"digitalECE.csv","POWER ELECTRONICS"=>"PowerElectronics.csv","EMBEDDED SYSTEMS"=>"EmbeddedSystems.csv","COMMUNICATION ENGINEERING"=>"CommunicationEngineering.csv","THERMODYNAMICS AND HEAT TRANSFER"=>"thermodynamicsAndHeatTransfer.csv","MECHANICS AND DYNAMICS"=>"MechanicsAndDynamics.csv","FLUID MECHANICS AND AERODYNAMICS"=>"FluidMechanicsAndAerodynamics.csv","MATERIAL SCIENCE"=>"MaterialsScienceAndEngineering.csv","MECHATRONICS AND CONTROL SYSTEMS"=>"MechatronicsAndControlSystems.csv","STRUCTURAL ENGINEERING"=>"structuralEngineering.csv","TRANSPORTATION ENGINEERING"=>"transportationEngineering.csv","GEOTECHNICAL ENGINEERING"=>"GeotechnicalEngineering.csv","ENVIRONMENTAL ENGINEERING"=>"EnvironmentalEngineering.csv","WATER RESOURCES ENGINEERING"=>"WaterResourcesEngineering.csv","BIOMECHANICS"=>"Biomechanics.csv","BIOMATERIALS"=>"Biomaterials.csv","MEDICAL IMAGING"=>"MedicalImaging.csv","INSTRUMENTATION"=>"BiomedicalInstrumentation.csv","SIGNAL PROCESSING"=>"SignalProcessing.csv","PROCESS ENGINEERING"=>"processEngineering.csv","REACTION ENGINEERING"=>"ReactionEngineering.csv","SEPARATION PROCESSES"=>"SeparationProcesses.csv","TRANSPORT PHENOMENA"=>"TransportPhenomena.csv","BIOCHEMICAL ENGINEERING"=>"BiochemicalEngineering.csv");
    $filtered=array();
    $index=0;
    $csvfile=fopen($filename[$domain],"r");
    while($data=fgetcsv($csvfile)){
        if($data[7]==$QUESTIONLEVEL[$domain]["currentlevel"] or strtolower($data[7])==$QUESTIONLEVEL[$domain]["currentlevel"]){
            $filtered[$index]=$data;
            $index+=1;
        }
    }
    fclose($csvfile);
    $questionset=$filtered[array_rand($filtered)];
    $question=$questionset[1];
    $a=$questionset[2];
    $b=$questionset[3];
    $c=$questionset[4];
    $d=$questionset[5];
    $answer=$questionset[6];
    $_SESSION["DOMAIN"]=$domain;
    $_SESSION["ANSWER"]=strtolower($answer);
?>
<html>
<head>
<title>Look for a Job</title>
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
<button id="next" onclick="getoption()" formaction="score.php">NEXT</button>
</form>
</body>
</html>
