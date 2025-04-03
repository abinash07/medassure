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
	
	var addUserForm = $("#addNewLearner");	

	var validator = addUserForm.validate({

		rules:{
			fname :{ required : true,  alphabetspaces: true, maxlength:25 },
			lname :{  required : true, alphabetspaces: true, maxlength:25 },
			username:{ required : true,minlength:8 },
			email : { required : true, email : true },
		     //password : { minlength:8 },
			//cpassword : {required : true, equalTo: "#password"},
			mobile : { required : true, mobile : true},
			state : { required : true, selected : true},
			designation : { required : true, selected : true},
			facility : { required : true, selected : true}

		},
		messages:{
			fname :{ required : "Enter First Name", alphabetspaces:"Please enter only alphabets" },
			lname :{required : "Enter Last Name",  alphabetspaces:"Please enter only alphabets", maxlength:25 },
			username : { required : "Enter Username"  },
			email : { required : "Enter Email ID", email : "Enter a valid Email ID", remote : "Email ID already taken" },
		 
			//cpassword : {required : "This field is required", equalTo: "Please enter same password" },
			mobile : { required : "Enter Mobile Number", mobile : "Provide a valid mobile number" },
			state : { required : "Select a State", selected : "Select a State" },
			designation : { required : "Select a Designation", selected : "Select a Designation" },
			facility : { required : "Select a Parent Facility", selected : "Select a Parent Facility" }						
		}
	});
	
	var addotherForm = $("#addotherLearner");	
	var validator = addotherForm.validate({

		rules:{
			fname :{ required : true,  alphabetspaces: true , maxlength:25},
			lname :{  required : true, alphabetspaces: true , maxlength:25},
			username:{ required : true, maxlength:15, minlength:8  },
			email : { required : true, email : true },
		   password : { minlength:8 },
			//cpassword : {required : true, equalTo: "#password"},
			mobile : { required : true, mobile : true},
			//state : { required : true, selected : true},
			//designation : { required : true, selected : true},
			//sacs_user : { required : true, selected : true}

		},
		messages:{
			fname :{ required : "Enter First Name", alphabetspaces:"Please enter only alphabets" },
			lname :{  required : "Enter Last Name",alphabetspaces:"Please enter only alphabets" },
			email : { required : "Enter Email ID", email : "Enter a valid Email ID", remote : "Email ID already taken" },
			username : { required : "Enter Username"   },
			//password : { required : "This field is required" },
			//cpassword : {required : "This field is required", equalTo: "Please enter same password" },
			mobile : { required : "Enter Mobile Number", mobile : "Provide a valid mobile number" },
			//state : { required : "Select a State", selected : "Select a State" },
			//designation : { required : "Select a Designation", selected : "Select a Designation" },
			//sacs_user : { required : "Select a Parent Facility", selected : "Select a Parent Facility" }						
		}
	});
});