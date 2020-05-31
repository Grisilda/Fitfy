
function registerSchedule() {
	debugger;
	var date1=$('#date1').val();
	var start_time1=$('#start_time1').val();
	var end_time1=$('#end_time1').val();
	var coach_name1=$('#coach_name1').val();
	var coach_surname1=$('#coach_surname1').val();
	var class_name1=$('#class_name1').val();

	debugger;
		$.post("registerSchedule.php",{
			date: date1,
			start_time: start_time1,
			end_time: end_time1,
			coach_name: coach_name1,
			coach_surname: coach_surname1,
			class_name: class_name1
		},function(e){
			if(e=='Please fill all the fields!'){
				$("#responseSchedule").text("Please fill all the fields!");	

			}else if(e=="This coach dont exist!"){
				$("#responseSchedule").text("This coach dont exist!");
			}else if(e=="This coach don't give this class!"){
				$("#responseSchedule").text("This coach don't give this class!");
			}else if(e=='Sucess'){
				 // alert('Here');
				window.location.replace('schedule1.php');
			}
		});
}


function CancelSchedule(){
	$("#myform").trigger('reset');

}
