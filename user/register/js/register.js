function registerActions() {
	// debugger;
	var firstname=$('#firstname').val();
	var lastname=$('#lastname').val();
	var email=$('#email').val();
	var ussername=$('#ussername').val();
	var gender=$('#gender').val();
	var age=$('#age').val();
	var passwd=$('#passwd').val();
	// alert('Pass eshte'+password);

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/;
	if(!email.match(mailformat))
	{
		$('#email_errors').html("Please enter a valid email!");
		return false;
	}else{
		$('#email_errors').html("");
	}

		$.post("../php/register.php",{
			firstname: firstname,
			lastname: lastname,
			email: email,
			ussername: ussername,
			gender: gender,
			age: age,
			passwd: passwd
			// refresh: false
		},function(e){
			// alert(e);
			if(e=='This ussername or email exists!'){
				$('#errors').html("This ussername or email exists!");	
			}else if(e=='An error happend, please check if your fields are valid!'){
				$('#errors').html("An error happend, please check if your fields are valid!");
			}else if(e=='Sucess'){
				// alert('Here');
				window.location.replace('../../../payment/Pindex.php');
			}
		});
}
