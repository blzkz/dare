<?php

echo heading($titulo, 3);
echo '<hr />';
echo $pregunta.br();
if (isset($tags))
{
	foreach ($tags as $tag)
	{
		echo $tag." ";
	}
}
?>