<?php
class Person
{
   public $first;
   public $last;

   public function __construct($f,$l)
   {
       $this->first = $f;
       $this->last = $l;
   }

   public function greeting()
   {
       return "Hei, jeg heter {$this->first} {$this->last}.";
   }

   public function staticGreeting($first, $last)
   {
       return "Hei, jeg heter $first $last.";
   }
}  // class Person

$him = new Person('Ulf','Lunde');
$her = new Person('Jelena','Lunde');

print "Hello world!";
echo '<br />';

echo $her->greeting(); 
echo '<br />';

echo Person::staticGreeting('Ulf','Lunde'); 
echo '<br />';
?>
