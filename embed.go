// not finished

package main

import (
	"log"
	"net/http"
	"bytes"
)

func main () {
	data := []byte(`{
		"content": "This embed was sent with Go.",
		"embeds": [
			{
				"type": "rich",
				"title": "Discord Embed",
				"description": "A script for posting embeds to Discord webhooks.",
				"fields": [
					{
						"name": "Language",
						"inline": true,
						"value": "Go"
					}, {
						"name": "Libraries",
						"inline": true,
						"value": "None"
					}
				],
				"thumbnail": {
					"url": "Yes"
				},
				"author": {
					"name": "Ivo Long",
					"url": "https://github.com/ivolong/discord-embed",
					"icon_url": "https://github.com/fluidicon.png"
				},
				"footer": {
					"text": "Something can go here",
					"icon_url": "https://github.com/fluidicon.png"
				},
				"color": "0xFFFFFF "
			}
		]
	}`)
	post, error := http.NewRequest("POST", "https://discordapp.com/api/webhooks/", bytes.NewBuffer(data))
	post.Header.Set("Content-type", "application/json")

	client := &http.Client{}
	response, error := client.Do(post)
	if error != nil {
		log.Fatal(error)
	}
	defer response.Body.Close()
}
