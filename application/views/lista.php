<?php
echo heading("Preguntas", 1);

foreach ($preguntas as $pregunta)
{
	echo anchor('pregunta/ver/'.$pregunta['_id'],$pregunta['titulo']).br();
	echo $pregunta['pregunta'].br();
	if (isset($pregunta['tags']))
	{
		foreach ($pregunta['tags'] as $tag)
		{
			echo $tag;
		}
	}
	echo '<hr>';
}