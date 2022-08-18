<?php
header('Content-Type: text/plain');
class Comparator
{
   private $key;

   public function __construct(string $key)
   {
      $this->key = $key;
   }
   public function __invoke($a,$b) //return $a['id'] <=> $b['id'];
   {

    return $a[$this->key] <=> $b[$this->key]; //$a['id'] <=> $b['id'];
   }
}

$customer = [
  ['id'=> 1, 'name' => 'john', 'credit' => 30000 ],
  ['id'=> 3, 'name' => 'Alice', 'credit' => 10000],
  ['id'=> 2, 'name' => 'Bob', 'credit' => 20000]
];


$x = new Comparator('id');

usort($customer,$x); //  return -1 , return 1,

?>
