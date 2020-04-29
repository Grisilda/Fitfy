function logimActions() {
	// debugger;
	var ussername=$('#username_place').val();
	var password=$('#password_place').val();
	var remember=$('#login-remember').val();
	// alert('Pass eshte'+password);

		$.post("../php/logimi.php",{
			ussername: ussername,
			password: password,
			remember: remember,
			// refresh: false
		},function(e){
			// alert(e);
			if(e=='Please fill all the fields!'){
				$('#passworderrors').html(" ");
				$('#errors').html("Please fill all the fields!");	
			}else if(e=='Please check your credintials!'){
				$('#passworderrors').html(" ");
				$('#errors').html("Please check your credintials!");
			}else if(e=='Your password is incorrect!'){
				// alert('Here');
				$('#errors').html(" ");
				$('#passworderrors').html("Your password is incorrect!");
			}else if(e=='Sucess'){
				window.location.replace('../../../index.php');
			}
		});
}