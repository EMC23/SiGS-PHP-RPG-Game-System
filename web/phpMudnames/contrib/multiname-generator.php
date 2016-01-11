<?php

$number = 5;
echo $number;
// --chdir('../');
require('mudnames.php');

$gname = new Mudnames();

$names = $gname->generates_several_names($number,'random');
echo implode('<br />', $names);

echo "<br/><br/>Memory peak ~" , round(memory_get_peak_usage()/1024, 2) , "ko";
