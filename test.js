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
	