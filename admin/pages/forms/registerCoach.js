
function registerActions() {
	debugger;
	var name=$('#name1').val();
	var surname=$('#surname1').val();
	var email=$('#email1').val();
	var username=$('#username1').val();
	var gender=$( '#gender1 option:selected' ).text();
	var age=$('#age1').val();
	var password=$('#password1').val();
	var description=$('textarea#description1').val();
	var instagram=$('#instagram1').val();
	var specialism=$( '#specialism1 option:selected' ).text();
	var salary=$('#salary1').val();
	// var file= $('#file')[0].files[0].name; 
	// alert('Pass eshte'+password);

	/*var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/;
	if(!email.match(mailformat))
	{
		$('#email_errors').html("Please enter a valid email!");
		return false;
	}else{
		$('#email_errors').html("");
	}*/

	debugger;

		$.post("registerCoach.php",{
			name: name,
			surname: surname,
			email: email,
			username: username,
			gender: gender,
			age: age,
			password: password,
			description:description,
			instagram:instagram,
			specialism:specialism,
			// file:file,
			salary:salary
			// refresh: false

		},function(e){
			debugger;
			 // alert(e);
		//alert('here');
			if(e=='This username or email exists!'){
				// alert('here');
				//debugger;
				debugger;
				$("#response").text("This username or email exists!");	
				// alert('here');
			}else if(e=='An error happend, please check if your fields are valid!'){
				$('#response').html("An error happend, please check if your fields are valid!");
			}else if(e=='Sucess'){
				 // alert('Here');
				window.location.replace('fitfyCoaches.php');
			}
		});
}


function Cancel(){
	$("#myform").trigger('reset');
	/*var name=$('#name').val("");
	var surname=$('#surname').val("");
	var email=$('#email').val("");
	var username=$('#username').val("");
	var gender=$( '#gender ').val("");
	var age=$('#age').val("");
	var password=$('#password').val("");
	var description=$('#description').val("");
	var instagram=$('#instagram').val("");
	var specialism=$( '#specialism ').val('');
	var salary=$('#salary').val("");*/

}
