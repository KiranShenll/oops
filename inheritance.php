<?php
class Name {
  private $name;
 
  public function setName($name)
  {
    $this -> name = $name;
  }
 
  public function hello()
  {
    return "I am a <i>" . $this -> name . "</i><br />";
  }
}
 
 
class fullName extends Name {
}
 
 
$fullName1 = new fullName();
  
$fullName1 -> setName('Kiran Sai');
  
echo $fullName1 -> hello();
?>