<?php
 	 
 header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
  $data = json_decode(file_get_contents('php://input'), true);
  $entery_id =  $data['id'];
  $status =  $data['status'];
  $form_id =  $data['form_id'];
  $source_url =  $data['source_url'];
  $currency =  $data['currency'];
  $created_by =  $data['created_by'];
  $transaction_type =  $data['transaction_type'];
  $full_name = 	 $data[1];
  $email =	$data[2];
  $phone =  $data[3];
  $type = $data[5];
  $your_area = $data[6];
  $budget = $data[7];
  $refrral_source = $data[8];
  $discription = $data[9];
  if($form_id == 4 ){
      	$dbhost="localhost";
    	$dbuser="quotesqm_admin";
    	$password="R^88GmsJ4sYBCx";
    	$dbname="quotesqm_leads";
    	$conn = new mysqli($dbhost, $dbuser, $password, $dbname);
        if($conn){
        	echo "conecting";
        }else{
        	echo "not conect";
        } 
        
    $sql = "INSERT INTO leads (entery_id, full_name, email, phone,	type, your_area, budget, referral, description) VALUES ('".$entery_id."', '".$full_name."', '".$email."', '".$phone."', '".$type."', '".$your_area."', '".$budget."', '".$refrral_source."', '".$discription."')";
	
	if ($conn->query($sql) === TRUE) {
	 $data['sucess'] = "New record created successfully 2";
	} else {
	  $data['error'] =   "Error: " . $sql . "<br>" . $conn->error;
	}

  }
     print_r($data['id']);
     
 }


 

?>
 