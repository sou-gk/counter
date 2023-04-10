<?php
$file_path = 'counter.txt';

$count = 0;
if (file_exists($file_path)) {
$count = (int)file_get_contents($file_path);
$count++;
file_put_contents($file_path, $count);
}

echo $count;
?>