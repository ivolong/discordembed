// not finished

package main

import (
	"fmt"
	"net/http"
	"bytes"
)

func main () {
	data := []byte(`{
		"content": "Yes",
		"embeds": [
			{
				"type": "rich",
				"title": "Yes",
				"description": "Yes",
				"fields": [
					{
						"name": "Yes",
						"inline": true,
						"value": "Yes"
					}, {
						"name": "Coins",
						"inline": true,
						"value": "Yes"
					}
				],
				"thumbnail": {
					"url": "Yes"
				}
			}
		]
	}`)
	post, error := http.NewRequest("POST", "https://discordapp.com/api/webhooks/", bytes.NewBuffer(jsonString))
	post.Header.Set("Content-type", "application/json")

	client := &http.Client{}
	response, error := client.Do(post)
	if error != nil {
		log.Fatal(error)
	}
	defer response.Body.Close()
}
