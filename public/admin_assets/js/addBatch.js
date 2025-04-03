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
			
			batchname :{ required : true,mixlength:10, maxlength:50  },
			//role : { required : true, selected : true},
			client:{ required : true, selected : true},
			ptype:{ required : true, selected : true},
			sessiontype:{ required : true, selected : true},
			trainer:{ required : true, selected : true},
			moderator:{ required : true, selected : true},
			other_trainer:{ required : true},
			other_moderator:{ required : true},
			datePick:{ required : true}
			
			
		},
		messages:{			
			batchname :{ required : "Enter Batch Name"},
			//role : { required : "Select a Role", selected : "Select a Role" },			
			client : { required : "Select a Client", selected : "Select a Client" },
			ptype : { required : "Select a Program Type", selected : "Select a Program Type" },
			sessiontype : { required : "Select a Session Type", selected : "Select a Session Type" },
			trainer : { required : "Select a Trainer", selected : "Select a Trainer" },
			moderator : { required : "Select a Moderator", selected : "Select a Moderator" },
			other_trainer : { required : "Select a Other Moderator"},
			other_moderator : { required : "Select a Other Trainer"},
			datePick :{ required : "Please Select Date"}
					
		}
			 			
		
	});



	$('#client').change(function(){
		var client = $('#client').val();
		//alert(state);
		if(client != '')
		{
		 $.ajax({
		  url: baseUrl+"batch/getprogram_master",
		  method:"POST",
		  data:{client:client},
		  
		  success:function(data)
		  {
  
		   $('#ptype').html(data);
  
		  }
		 });
		}
		
	   });
  
  var datatype=$("#ptype").attr('data-type');
	  if(datatype !=''){
  var client = $('#client').val();
		//alert(state);
		if(client != '')
		{
		 $.ajax({
		  url:baseUrl+"batch/getprogram_master",
		  method:"POST",
		  data:{client:client},
		  
		  success:function(data)
		  {
  
		   $('#ptype').html(data);
		   $('select[name="ptype"]').val($("select[name='ptype']").attr("data-type"));
  
		  }
		 });
		}
		
	  }
  
  
	  $('#course').change(function(){
		var course = $('#course').val();
		//alert(state);
		if(course != '')
		{
		 $.ajax({
		  url: "getcoursesection",
		  method:"POST",
		  data:{course:course},
		  
		  success:function(data)
		  {
  
			  /*var output='';
			  
			  $.each(jsonData.section, function(index,value){               
				 
				 
  
				  output =output+"<tr ><td width='20%'><input type='checkbox' name='course_section[]' class='required checkbox' value='"+value.id+"' ></td><td width='20%'>"+value.section+"</td><td width='20%'>"+value.name+"</td><td width='40%'><input type='date' name='start' id='start"+value.id+"'  class='form-control required input-xs' placeholder='dd-mm-yyyy'/></td></tr>";
  
			   });*/
		   $('#tabledivcourse').html(data);
  
		  }
		 });
		}
		
	   });



	   $("#select_section").click(function(){

		$("input[name='course_section[]']").prop('checked', $(this).prop('checked'));
		
		});  
		 
		$("#alltrainers").click(function(){
		
		$("input[name='other_trainer[]']").prop('checked', $(this).prop('checked'));
		
		});  
		
		 
		$("#allmoderator").click(function(){
		
		$("input[name='other_moderator[]']").prop('checked', $(this).prop('checked'));
		
		});  



});
