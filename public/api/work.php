<?php

echo '<pre>';


echo "string one" . " 1" . "\n";

class Animal
{
  public $type = 'Pig';
}

$wilber = new Animal();

echo $wilber->type ."\n";

$arr = [];

$arr = [
  'first' => 'Tom',
  'last' => 'Gregory'
];

$arrToo = ['one','two','three'];

print_r($arr);
var_dump($arrToo);

$n = 3;
if ($n == 5) {
  echo 'n is big';
} else {
  echo 'n is small';
}

for ($i=0; $i<5; $i++) {
  // Do stuff
}
