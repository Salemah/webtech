<?php
$a=array(21,56,34,array(22,67),90,array(1,45));
$l=count($a);
for($i=0;$i<$l;$i++)
{
if(is_array($a[$i]))
{
$b=$a[$i];
$l2=count($b);
for($j=0;$j<$l2;$j++)
{
echo $a[$i][$j].", ";
}
echo "<br/>";
}
else
{
echo $a[$i]."<br/>";
}

}
?>