<?php
	$url = ''; // The URL of your webhook - https://discordapp.com/api/webhooks/123/abc123

	$embeds = array([
		'type' => 'rich',
		'title' => 'Title',
		'description' => 'Description.',
		'color' => 0xFFFFFF
	]);
	$data = array('embeds' => $embeds);
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	echo curl_exec($curl);
  
?>
