<?php

// This is a unique ID generated for this call
$sessionId = $_POST['sessionId'];
// Check to see whether this call is active
$isActive  = $_POST['isActive'];
if ($isActive == 1)  {  
  // Forward by dialing customer service numbers and record the conversation
  // Compose the response
  $response  = '<?xml version="1.0" encoding="UTF-8"?>';
  $response .= '<Response>';
  $response .= '<Dial record="true" sequential="true" phoneNumbers="+254720722694,+254727436116" />';
  $response .= '</Response>';
  
  // Print the response onto the page so that our gateway can read it
  header('Content-type: text/plain');
  echo $response;
} else {
  
  // Read in call details (duration, cost). This flag is set once the call is completed.
  // Note that the gateway does not expect a response in thie case
  
  $duration     = $_POST['durationInSeconds'];
  $currencyCode = $_POST['currencyCode'];
  $amount       = $_POST['amount'];
  // Be sure to read in the URL of the recorded conversation
  $recording    = $_POST['recordingUrl'];
  
  // You can then store this information in the database for your records
}
