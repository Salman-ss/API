  <?php

  require 'conn.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=md5($_POST['password']);



  $checkUser='select * from msapi where Email="'.$email.'"';
  $checkQuery=mysqli_query($con,$checkUser);

  if(mysqli_num_rows($checkQuery)>0){

  	 $response['error']="403";
  	$response['message']="User exist";
  }
  else
  {
     $insertQuery='insert into msapi(Name,Email,Mobile,Password) values("'.$name.'","'.$email.'","'.$mobile.'","'.$password.'")';
  $result=mysqli_query($con,$insertQuery);

  if($result){

  	$response['successful']="0";
  	$response['message']="Register successful!";
  }
  else
  {
  	$response['error']="False";
  	$response['message']="Registeration failed!";
  }



  }

  
  echo json_encode($response);

?>