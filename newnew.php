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
	  line-height: 40px;
	  height: 450px;
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
</style>
<title>  Keeping Health </title>
</head>
<body>
<div class="header">
     <p id="p1"><img src="53570953_1687522978014200_8443716218568835072_n.jpg" alt="Logo" style="float: left;">
	 <img src="computer-brain.jpg" style="float: right;">
	 <p id="p2">&nbsp;ProSang, &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Team Temporal<br>
	  &nbsp;MNNIT Allahabad &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;and&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Brain Sensing</p>
</div>
<div class="heading">
     <p> brings to you...</p>
     <h1> Digital Health Advisor </h1>
</div>	 
<form action="form1.php" method="post" target="_blank">
<div class="form">
<h3> Enter the details below: </h3>
<p style="font-family: 'Arial'; font-size: 20px; font-weight: bold; color: black; font-variant: small-caps; text-decoration: underline;"> Personal Details: </p>
<label> Name </label> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
<input type="text" placeholder="Your Name..." required name="name" autofocus style="width: 250px; height: 20px; padding: 2px;"><br>
<label> Age </label> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; &ensp; &ensp;  
<input type="number" min="5" max="90" placeholder="Your Age...(5 to 90)" name="age" style="width: 150px; height: 20px; padding: 2px;"><br>
<label> Gender </label> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
<input type="radio" checked name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female &emsp;
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="male"> Male &emsp;
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="other"> Other <br> 
<p style="font-family: 'Arial'; font-size: 20px; color: black; font-weight: bold; font-variant: small-caps; text-decoration: underline;"> Body Ailments: </p>
<input type="checkbox" name="ailment[]"  value="dep"> Depression &ensp;
<input type="checkbox" name="ailment[]"  value="ind"> Indigestion &ensp;
<input type="checkbox" name="ailment[]"  value="dia"> Diabetes &ensp;
<input type="checkbox" name="ailment[]"  value="mig"> Migraine &ensp;
<input type="checkbox" name="ailment[]"  value="hyp"> Hypertension &ensp;<br>
<input type="checkbox" name="ailment[]"  value="bjm"> Bone, Joint and Muscle Pains &ensp;
<input type="checkbox" name="ailment[]"  value="hbp"> High Blood Pressure &ensp;
<input type="checkbox" name="ailment[]"  value="ins">Insomnia &ensp;
<br>
<input type="submit" id="btn">
</div>
</form>
</body>
</html>
