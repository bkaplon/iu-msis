<?php

echo '<pre>';
echo "foo\n";
echo 'bar\n';

$name = 'Phil';

echo "\n";
echo "My name is {$name}\n";
echo "My name is " . $name . "\n";

class Animal
{
  public $type = 'Pig';
}

$wilbur = new Animal();
echo $wilbur->type;

if (true) {
  // This
} else {
  // That
}

for ($i = 0; $i< 10; $i++) {
  // stuff
}

$id = 0;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$id = $_GET['id'] ?? 0;


$arr1 = [
  'first' => 'Tom',
  'last' => 'Gregory'
];

echo '[0]:' . $arr1[0]; // Won't work!
echo '[first]:' . $arr1['first']; // Will work

$arr2 = [ 'one', 'two', 'three'];

$arr2 = [
  0 => 'one',
  1 => 'two',
  2 => 'three'];

foreach($arr2 as $key=>$val) {
  echo $key .':'.$val;
}
