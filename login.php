<?php 

include 'conn.php';

//$id = $_POST['Id'];
$id = $_POST['Id'] ;
$qr = 'select * from msapi where Id = "'.$id.'"';
$res = mysqli_query($con,$qr);



while ($row=mysqli_fetch_assoc($res)) {
		
 			echo  $row['Id']; 
 			echo  $row['Name'];
 		
 			
 		  	$response['successful']=" 0";
  	        $response['message']="login successful!";
			
			

}


  echo json_encode($response);
    


	
?>