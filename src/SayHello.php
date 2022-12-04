<?php

namespace Say;

class SayHello
{
  public function __construct(public string $name)
  {}

  public function sayHello(string $name): void
  {
    echo "Hello $name, my name is $this->name";
  }
}