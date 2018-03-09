<?php
namespace App\Model;
class JobBuilder
{
  public $price;
  public $location;
  public $description;
  public $name;

  public function __construct($price)
  {
     $this->price = $price;
  }

  public function name(String $name):JobBuilder
  {
    $this->name = $name;
    return $this;
  }

  public function description(String $description):JobBuilder
  {
    $this->description = $description;

    return $this;
  }

  public function location(String $location):JobBuilder
  {
    $this->location = $location;

    return $this;
  }

  public function build():JobBuilder
  {
    return $this;
  }
}
