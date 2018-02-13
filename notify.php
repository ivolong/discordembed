<?php

	$url = ''; // Copy and paste the URL of your Discord Webhook here in the format https://discordapp.com/api/webhooks/123/abc
  
	// Add, remove and edit the embedded features you want - https://discordapp.com/developers/docs/resources/channel#embed-object
	$embeds = array([    
		'type' => 'rich', // Don't change this
		'title' => 'Title',
		'description' => 'Description.',
		'url' => 'http://www..com/'
	]);
  
	$data = array('embeds' => $embeds); // If you don't want to use embeds, try 'contents' => 'Simple message' instead
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_exec($curl);
  
?>
