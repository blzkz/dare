<?php

foreach ($tags as $tag)
{
	$size = ($tag['count']/10);
	$size++;
	$size = 15*$size;
	if ($size > 80)
		$size = 80;
	if (isset($tag['tag']))
	{
		echo "<span style='font-size:";
		echo $size;
		echo "px'>".anchor('tags/tag/'.$tag['tag'],$tag['tag']).'</span> ';
	}
}