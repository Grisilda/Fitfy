<?php
	function getAllCoaches(){
		$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect');
		
		$query="select name,surname,description, instagram, photo , specialism from user where role=2 order by salary";
		$i=0;
		$data=mysqli_query($connect,$query);
		$info=[];
		$info=[];
		$info=[];
		$info=[];
		while ($row = mysqli_fetch_array($data)) {
		        $info['name'][$i]=$row[0].' '.$row[1];
		        $info['description'][$i]=$row[2];
		        $info['instagram'][$i]=$row[3];
		        $info['photo'][$i]='admin/pages/forms/upload/'.$row[4];
		        $info['specialism'][$i]=$row[5];
		        $i++;
		}
		return $info;	
		// for( $i=0;$i<$sizeof($name);$i++){
		// 	echo '<div class="col-lg-3 col-sm-6">';
		// 	echo '<div class="single-trainer-item">';
		// 	echo '<div class="trainer-pic">';
		// 	echo '<img src="img/trainer/trainer-1.jpg" alt="">';
		// 	echo '</div>';
		// 	echo '<h5>Noah Leonard</h5>';
		// 	echo '<span>Gymer</span>';
		// 	echo '<div class="trainer-social">';
  //           echo '<a href="#"><i class="fa fa-instagram"></i></a>';    
  //           echo '</div>';        
  //           echo '</div>';        
  //           echo '</div>';             
  //           echo '</div>';                 
                           
             
		// }	
}	
?>
