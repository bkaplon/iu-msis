<?php

echo '<pre>';

echo "foo\n";

echo 'foo\n';
echo "\n";

$n = 5;
echo "bar {$n}\n";
echo "bar " . $n . "\n";

class Animal
{
  public $type = 'Pig';
}

$wilbur = new Animal();
echo $wilbur->type;

$arr = [
  'first' => 'Tom',
  'last'  => 'Gregory'
];

echo "\n".$arr['first'];

$arrToo = ['zero', 'blue', 'two'];

echo "\n" . $arrToo[1];

$id = 0;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$id = $_GET['id'] ?? 0;
