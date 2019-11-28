// not finished

package main

import (
  "fmt"
	"net/http"
	"bytes"
)

func main () {
  jsonString := []byte(`{"content": "not finished"}`)
  post, error := http.NewRequest("POST", "https://discordapp.com/api/webhooks/", bytes.NewBuffer(jsonString))
  post.Header.Set("Content-type", "application/json")

  client := &http.Client{}
  response, error := client.Do(post)
  if error != nil {
    fmt.Println("HTTP error when posting to Discord")
  }
  defer response.Body.Close()
}
