<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($m = 1; $m <= $testcase; $m++)
{
   fscanf(STDIN, "%s %d\n", $n, $p);
   $arr = str_split($n);
   $size = sizeof($arr);
   $count = 0;
   for($i = 0; $i < $size; $i++)
   {
       if ($count == $p)
            break;
       if ($arr[$i] < 9)
       {
            $arr[$i] = 9;
            $count++;
       }
   }
   $q = implode($arr);
   fprintf(STDOUT, "Case %d: %s\n", $m, $q);
}