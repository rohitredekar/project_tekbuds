<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style type="text/css">
		body{
		background-color: lightgrey;
		font-size: 20px;
	}
	.grid-container {
		display: grid;
		grid-gap: 30px;
		padding: 10px;
		
	}

	.grid-container > div {
		background-color: white;
		text-align: center;
		padding: 20px 20px;
		font-size: 15px;
		border-radius: 10px;
	}
	.item1 {
		grid-column: 1 / span 3;
		grid-row: 1 / span 20;
	}
	.item2 {
		grid-column: 4 / span 3;
		grid-row: 1 / span 20;
	}
	.item3 {
		grid-column: 7 / span 3;
		grid-row: 1 / span 20;
	}
	.headbar{
		width: 100%;
		height: 30px;
		background-color: darkgrey;
		color: yellow;
		text-align: center;
		border-radius: 20px;
	}
	.footerbar{
		width: 100%;
		height: 30px;
		background-color: darkgrey;
		color: yellow;
		text-align: center;
		border-radius: 20px;
	}
	input{
		border-radius: 10px;
	}
	button{
		background-color: black;
		color: white;
	}

	.item-code{
		background-color: lightblue;
		width: auto;
		height: 500px;
		border-radius: 20px;
	}
	.table-table{
		border: 2px solid black;
		border-collapse: collapse;
		width: 500px;
	}
	.item-code2{
		background-color: lightgreen;
		border-radius: 20px;
		width: auto;
		height: 500px;
	}
	.item-code3{
		
	}
	.first-column {
		background-color: lightblue;
  		height: 500px;
  		float: left;
  		padding: 10px;
  		
	}

	.second-column {
		background-color: lightgreen;
	  	height: 500px;
	  	float: right;
	  	padding: 10px;
	  	
	  	
	}


	
	</style>
	<script type="text/javascript">
		var n=1;
var x=0;
function myfunction(){
	var table=document.getElementById("table");
	var newtable=table.insertRow(n);
	var fname=document.getElementById('fname').value;
	if(document.getElementById("male").checked){
		var gender=document.getElementById('male').value;
	}else{
		var gender=document.getElementById('female').value;
	}
	var contact=document.getElementById('contact').value;
	var email=document.getElementById('email').value; 
	var pswd=document.getElementById('pswd').value;
	var cpswd=document.getElementById('cpswd').value;


	if(fname ==''){
		alert("required name is mandatory")
		return false;
	}

	if(contact.replace(/\D/g,'').length != 10){
		alert("please write 10 digit correct contact number")
		return false;
	}

	if(pswd != ''){
	var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
	if(pswd.match(paswd)) 
	{
	if(cpswd !=pswd){ 
		alert("please confirm same password")
	}else{   


	var cel1=newtable.insertCell(0);
	var cel2=newtable.insertCell(1);
	var cel3=newtable.insertCell(2);
	var cel4=newtable.insertCell(3);
	
	cel1.innerHTML = fname;
	cel2.innerHTML = gender;
	cel3.innerHTML = contact;
	cel4.innerHTML = email;

	n++;
	x++;
		alert("HELLO WORLD printed on console");
		$( document ).ready()
		$(function() {
		    console.log("Hello World");
		});
		$(document).ready(function(){
		 $("#temp").html("Hello World");
		});

		$(document).ready(function(){
		  $("button").click(function(){
		    alert("Value: " + $("#fname").val());
		  });
		});
			return true;
		}
			}


		else
		{ 
		alert('please choose 8 to 15 character which is one special character and one number and capital and small letters')
		return false;
		}
	}else{
		alert("password should not be empty")

	}

   
 }
	
	</script>
</head>
<body>
	<div class="headbar">SINGLE PAGE APPLICATION</div>
<div class="grid-container">
  <div class="item1">
  	<div class="item-code">
  	<h2>User Registration</h2>
  	<hr>
  	<form id="myform" method="POST" action="test.php">
  	Name:<input type="text" name="fname" id="fname" placeholder="Enter Your Name.."><br><br>
  	<input type="radio" name="gender" id="male" value="male">Male
  	<input type="radio" name="gender" id="female" value="female">Female<br><br>
  
  	Contact No:<input type="text" name="contact" id="contact" placeholder="Enter Your Contact Number.."><br><br>
  	Email Id:<input type="email" name="email" id="email" placeholder="Enter your Gmail Id" required><br><br>
  	Password:<input type="password" name="pswd" id="pswd" placeholder="Enter password"> <br><br>
  	Confirm Password:<input type="password" name="cpswd" id="cpswd" placeholder="Confirm password"> <br><br>
  	<button type="button" name="submit" id="submit" onclick="myfunction()">SUBMIT</button>
  </form>
</div>
  </div>

  <div class="item2">
  <div class="item-code2">
  	<h2>User List</h2>
  	<hr>
	<table class="table-table" id="table">
		<thead>
		<tr>
			<th class="table-table">Name</th>
			<th class="table-table">Gender</th>
			<th class="table-table">Contact no</th>
			<th class="table-table">Email</th>
		</tr>
		</thead>
	</table>
 </div>
 </div>


  <div class="item3">
  	<div class="row">
  	<div class="item-code3">
<div class="modal-body">
   <div class="first-column">
   	hello world printed HERE....
   	<div id="temp"></div>
      
   </div>
   <div class="second-column">
   	User Name printed HERE...
   	<button>Show Name</button>
   	 
       
   </div>
</div>


</div>
 </div>
</div>
</div>
<div class="footerbar">CopyRight 2014 Reserved</div>
</body>
</html>



