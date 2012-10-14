<?php

foreach ($questions as $question)
{
	echo anchor('pregunta/ver/'.$question['_id'],$question['titulo']).br();
}