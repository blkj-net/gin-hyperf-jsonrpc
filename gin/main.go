package main

import (
	go_jsonrpc "github.com/sunquakes/jsonrpc4go"
	"goService/controllers"
)

func main() {
	s, _ := go_jsonrpc.NewServer("http", "127.0.0.1", "3233")
	s.Register(new(controllers.Go))
	s.Start()
}
