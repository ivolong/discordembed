<?php

    // Variables:
    
    $text = 'This embed was sent with PHP.'; // Standard message content, not part of the embed.
    
    $webhook = 'https://discordapp.com/api/webhooks/'; // Your webhook URL.
    
    // Function.

    $embeds = array([
        'type' => 'rich',
        'title' => 'Discord Embed',
        'description' => 'A script for posting embeds to Discord webhooks.',
        'fields' => array(
            [
                'name' => 'Language',
                'inline' => true, // If true, they can appear horizontally-placed, depending on the size of the user's screen.
                'value' => 'PHP'
            ],[
                'name' => 'Libraries',
                'inline' => true, // If false, they will appear vertically placed.
                'value' => 'None'
            ]
        ),
        'thumbnail' => ([
            'url' => 'https://github.com/fluidicon.png' // Appears in the top right corner of the embed.
        ]),
        'author' => ([
            'name' => 'Ivo Long', // Appear at the top of the embed.
            'url' => 'https://github.com/ivolong/discordwebhook',
            'icon_url' => 'https://github.com/fluidicon.png' // Appears in the top left corner.
        ]),
        'footer' => array(
            'text' => date('l').', '.date('F').' '.date('jS').' at '.date('h:i:s').' '.date('T'), // This will display a timestamp: Day, Month nth at 00:00:00 TIMEZONE
            'icon_url' => 'https://github.com/fluidicon.png'
        ),
        'color' => 0xFFFFFF // Standard hexadecimal color with, with preceding '0x'.
    ]);
    
    $data = array(
        'content' => $text,
        'embeds' => $embeds
    );
    
    $curl = curl_init($webhook);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    echo curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Post to the webhook and return any errors.
    curl_exec($curl);
    
?>
