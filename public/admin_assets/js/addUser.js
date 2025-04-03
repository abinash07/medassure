/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addUserForm = $("#addUser");	

	var validator = addUserForm.validate({
		
		rules:{
			role : { required : true, selected : true},
			client:{ required : true, selected : true},
			fname :{ required : true,  alphabetspaces: true, maxlength:25  },
			lname :{  required : true, alphabetspaces: true , maxlength:25 },
			email : { required : true, email : true },
			password : { required : true,minlength:8,maxlength:20 },			
			mobile : { required : true, mobile : true }
			
		},
		messages:{
			role : { required : "Select a Role", selected : "Select a Role" },			
			client : { required : "Select a Client", selected : "Select a Client" },
			fname :{ required : "Enter First Name", alphabetspaces:"Please enter only alphabets"},
			lname :{ required : "Enter Last Name", alphabetspaces:"Please enter only alphabets"},
			email : { required : "Enter Email ID", email : "Enter a valid Email ID", remote : "Email ID already taken"  },
			password : { required : "Password is required" },			
			mobile : { required : "Enter Mobile Number", mobile : "Provide a valid mobile number" }			
		}
			 			
		
	});
});
