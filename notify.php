<?php
	$url = '';

	$embeds = array([
		'type' => 'rich',
		'title' => 'Title',
		'description' => 'Description.',
		'color' => 2522356
	]);
	$data = array('embeds' => $embeds);
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_exec($curl);
  
?>
