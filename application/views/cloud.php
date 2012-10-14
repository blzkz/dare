<?php

foreach ($tags as $tag)
{
	$size = ($tag['count']/10);
	$size++;
	$size = 15*$size;
	if ($size > 80)
		$size = 80;
	echo "<span style='font-size:";
	echo $size;
	echo "px'>".$tag['tag'].'</span> ';
}