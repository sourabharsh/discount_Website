// JavaScript Document

function validateEmail( email){
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>				   	()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(re.test(email) == false){
		document.getElementById('email').innerHTML = "Invalid Id";		
		return false;
		}
	else{
		document.getElementById('email').innerHTML = "";		

		return true;
		}
	

	};
	
// Validate name of the user for empty String
function validateName(name){
	if(name ==""){
		document.getElementById('name').innerHTML = 'empty';
		return false;
		}
	else{
		document.getElementById('name').innerHTML = '';
		return true;
		}	
	}
// Validate query for emptiness
function validateQuery(query){
	if(query ==""){
		document.getElementById('query').innerHTML = 'empty';
		return false;
		}
	else{
		document.getElementById('query').innerHTML = '';
		return true;
		}	
	}


function validateUrl(url){
	if(url.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/) == false){
		document.getElementById('url').innerHTML = 'Invalid';
		
		}
	else{
		document.getElementById('url').innerHTML = '';
		}
	if(url == ""){
		document.getElementById('url').innerHTML = 'empty';
		}
	}
	
	

	
$(function(){
	$("#contact_form_submit").click(function (){
		var name = document.getElementById("userName").value;
		var email = document.getElementById("userEmail").value;
		var url = document.getElementById("url").value;
		var address = document.getElementById("address").value;
		var query = document.getElementById("message").value;
		//validate and process the form here 
		if(validateName(name) == true && validateEmail(email) == true && validateQuery(query)){

			var request = 	$.ajax({
							url: "scripts/uploadQuery.php",
							data: {name: name, email:email,url:url,address:address,query:query},
							type: "GET",
							context:document.body				
							});
			request.done(function(msg){
				$("#result").html('Successful, We will get back to you asap!');
				});
			request.fail(function(jqXHR, textStatus){
				$("#result").html('Error, please try later');
				});
			}
			
		else{
			
			document.getElementById("result").innerHTML = 'There seems to be a invalid entry';	
			}
		return false;
		});
	});