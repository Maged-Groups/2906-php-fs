<h1>Variable by Reference or by Value</h1>

<h2>By Value</h2>
<?php 

$x = 10;


function update($num)
{
$num++;
return $num;
}

update($x);

var_dump($x);
?>


<h2>By Refernce</h2>
<?php 

$y = 10;


function update_2(&$num)
{
$num++;
return $num;
}

update_2($y);

var_dump($y);
?>