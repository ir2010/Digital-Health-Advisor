<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-image: url("Yoga-Wallpaper-13.jpg");
	background-repeat: no-repeat;
	background-size: 1550px;
	top-margin: 0;
	}
	
img {
    width: 90px;
	height: 90px;
	vertical-align: sup;
	}

.header{
        background-color: #333;
		overflow: hidden;
		height: 120px;
		box-shadow: 10px 10px 5px grey;
	   }

.header #p2{
         color: white;
		 font-family: Verdana;
		 font-size: 18px;
		 letter-spacing: 2px;
		 line-height: 45px;
		 padding-left: 1.8em;
		 }
.heading{
         padding-top: 14px;
		 line-height: 10px;
		 
		 }
.heading h1{
         text-align: center;
		 font-family: Arial;
		 font-size: 50px;
		 font-variant: small-caps;
		 font-weight: bold;
		 text-shadow: 4px 2px gray;
		 }
.heading p{
           text-align: center;
		   font-family: 'Courier New';
		   font-weight: bold;
		  }
.form{
      background-image: linear-gradient(to bottom, #fdcf94, #4c677c);
      position: relative;
	  left: 800px;
      border: 2px solid #15365f;
	  border-radius: 15px;
	  text-align: left;
	  padding-bottom: 10px;
	  padding-top: 10px;
	  padding-left: 8px;
	  padding-right: 2px;
	  margin-top: 60px;
	  margin-right: 50px;
	  line-height: 25px;
	  height: 730px;
	  width: 600px;
	 }
#btn{
     position:relative;
	 left: 280px;
	 cursor: pointer;
	 border-radius: 4px;
	 }
#btn:hover{
           background-color: grey;
		   border-color: grey;
		  }
h3{
   font-family: 'Verdana';
   font-style: italic;
  }
  
label{
       color: black;
	   font-weight: bold;
	   font-size: 19px;
	  }
           
input{
      background-color: #f1f1f1;
	  border: none;
	  }
a:hover {
  color: red;
        }
</style>
<title>  Keeping Health </title>
</head>
<body>
<div class="header">
     <p id="p1"><img src="53570953_1687522978014200_8443716218568835072_n.jpg" alt="Logo" style="float: left;">
	 <img src="computer-brain.jpg" style="float: right;">
	 <p id="p2">&nbsp;ProSang, &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Team Temporal<br>
	  &nbsp;MNNIT Allahabad &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;and&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Brain Sensing</p>
</div>
<div class="heading">
     <p> brings to you...</p>
     <h1> Digital Health Advisor </h1>
</div>
<div class="form">
<h2> Welcome... </h2> 
<?php 
$myfile=fopen("kuchbhi.txt","r");
//$myfile=basename($_SERVER['PHP_SELF']);
$i=0;
$count=0;
$lines=0;
$arr=array();
while(!feof($myfile))
{ $line=fgets($myfile);
 $arr[$i]=$line;
$lines++;
$i++;}


for($x=0;$x<$lines;$x++)
{ if($arr[$x]==1)
$count++; }

if($_POST['gender'] == "female")
	$sal="Ms.";
else $sal="Mr.";
echo "<h3><i>", "Hello ", $sal ," ",$_POST['name'], "!","</i></h3>";

if($count>=(0.7*$lines))
	$msg="High Stress :(";
else if($count<=(0.7*$lines) && ($count>=(0.3*$lines)))
	$msg="Moderate Stress";
else 
	$msg="Low Stress :)";
echo "Reading from your brain.......";
echo "You're suffering from <b> $msg </b>.";
echo "<strong><br><br>The recommended Yogasans are listed below against the respective ailments:</strong><br>";
extract($_POST);
echo "<ul>";
if($msg=="High Stress")
	echo "<li> <b>High Stress</b> - <br><ol> <li><a href='yoga.html#ut'>Uttanasana/Standing Forward Bend Pose</a>", "<li><a href='yoga.html#pp'>Halasana/Plow Pose</a></ol>";
else if($msg=="Moderate Stress")
	echo "<li> <b>Moderate Stress</b> - <br><ol> <li><a href='yoga.html#bap'>Baddha Konasana / Bound Angle Pose</a>", "<li><a href='yoga.html#ep'>Sukhasana / Easy Pose</a></ol>";
echo "</ul>";
foreach($ailment as $val)
{echo "<ul>";
/*if($val == "dep")
	echo "<li> <b>Depression</b> - <br><ol> <li><a href='yoga.html#bap'>Baddha Konasana / Bound Angle Pose</a>", "<li><a href='yoga.html#ep'>Sukhasana / Easy Pose</a></ol>";*/
if($val == "ind")
	echo "<li> <b>Indigestion</b> - <br><ol> <li><a href='yoga.html#kcp'>Apanasana/Knees to Chest Pose</a>", "<li><a href='yoga.html#sfbp'>Paschimottanasana/ Posterior Stretch Pose</a></ol>";
if($val == "dia")
	echo "<li> <b>Diabetes</b> - <br><ol> <li><a href='yoga.html#hst'>Ardha Matsyendrasana/ Half Spinal Twist</a>", "<li><a href='yoga.html#wp'>Chakrasana/ Wheel pose</a></ol>";
if($val == "mig")
	echo "<li> <b>Migraine</b> - <br><ol> <li><a href='yoga.html#lp'>Padmasana/ Lotus Pose</a>", "<li><a href='yoga.html#s'>Sirsasana</a></ol>";
/*if($val == "hyp")
	echo "<li> <b>Hypertension</b> - <br><ol> <li><a href='yoga.html#ut'>Uttanasana/Standing Forward Bend Pose</a>", "<li><a href='yoga.html#pp'>Halasana/Plow Pose</a></ol>";*/
if($val == "bjm")
	echo "<li> <b>Bone, Joint & Muscle Pains</b> - <br><ol> <li><a href='yoga.html#tp'>Tadasana/Tree Pose</a></ol>";
if($val == "hbp")
	echo "<li> <b>High Blood Pressure</b> - <br><ol> <li><a href='yoga.html#bap'>Baddha Konasana/Bound Angle Pose</a>", "<li><a href='yoga.html#cp'>Shavasana/Corpse Pose</a></ol>";
if($val == "ins")
	echo "<li> <b>Insomnia</b> - <br><ol> <li><a href='yoga.html#btp'>Padangusthasana/Big Toe Pose</a>", "<li><a href='yoga.html#mb'>Chandra Bhedana/Moon Breath</a></ol>";
echo "</ul>";}
echo "THANKS :)";

?>
</div>

</body>
</html>
