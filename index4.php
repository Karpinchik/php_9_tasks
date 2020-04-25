<?php 

$array_rand_int = [];

for ($i = 0; $i < 10; $i++) 
    $array_rand_int[] = rand(1, 50);

sort($array_rand_int);

echo "Массив с случайно заполнеными значениями (отсортированый)";
print_r($array_rand_int);
echo "<br>";

$item_max = $array_rand_int[0];
$item_min = $array_rand_int[(count($array_rand_int)-1)];
$array_min_and_max = array(0 => $item_min, count($array_rand_int)-1 => $item_max);
$res = array_replace($array_rand_int, $array_min_and_max);
echo "Массив с переменой max и min значений.";
print_r($res);

?>