<?php
// Be sure to include our gateway class
require_once('AfricasTalkingGateway.php');

// Specify your login credentials
$username   = "Clives";
$apikey = "cddd89c8be77afbc8a6d0d21aa6d3ef9fc1da6f0448beb32d41149ce05ba15ea"
// Specify your Africa's Talking phone number in international format
$from = "+254711082422";

// Specify the numbers that you want to call to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case, +256 for Uganda)
$to   = "+254727436116,+254733YYYZZZ";

// Create a new instance of our awesome gateway class
$gateway = new AfricasTalkingGateway($username, $apikey);

// Any gateway errors will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{
  // Make the call
  $results = $gateway->call($from, $to);

  //This will loop through all the numbers you requested to be called
  foreach($results as $result) {
	//Only status "Queued" means the call was successfully placed
	echo $result->status;
	echo $result->phoneNumber;
	echo "<br/>";
  }
		
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while making the call: ".$e->getMessage();
}

// DONE!!! 
