<html>
<body>
<?php
$a=array(20,15,8,1,14,2);
echo "Array Before Sorting";
foreach($a as $i)
{
echo "$i<br>";
}
echo "<br> Array after Sorting";
Arraysort($a);
function Arraysort($a)
{
$n=count($a);
for($i=0;$i<$n-1;$i++)
{
for($j=$i+1;$j<$n;$j++)
{
if($a[$i]>$a[$j])
{
$temp=$a[$i];
$a[$i]=$a[$j];
$a[$j]=$temp;
}
}
}
foreach($a as $i)
{
 echo "$i<br>";
}
}
?>
</body>
</html>
