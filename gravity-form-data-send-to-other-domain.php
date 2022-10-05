/***************************/
add_action( 'gform_after_submission', 'access_entry_via_field', 10, 2 );
<?php 

function access_entry_via_field( $entry, $form ) {

	$entry1 = json_encode($entry);

	// print_r($result);
	#php 7.x
    $curl = curl_init();
		curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://quotes.canadiangeneralcontractors.com/received_lead.php',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS => $entry1,
	  CURLOPT_HTTPHEADER => array(
		'Accept: */*',
		'Content-type: application/x-www-form-urlencoded\\r\\n'
	  ),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	    
}

 