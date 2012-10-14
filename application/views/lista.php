<?php 
echo '<div class="span4">'.heading("Preguntas", 1)."</div>";
?>
<div class = "row">
<div class="span2 offset 6">
<?php echo anchor('pregunta/nueva', 'Nueva', 'class = "btn btn-primary btn-large"')."</div></div>";
foreach ($preguntas as $pregunta)
{
	echo '<b>'.anchor('pregunta/ver/'.$pregunta['_id'],$pregunta['titulo']).'</b>'.br();
	echo $pregunta['pregunta'].br();
	if (isset($pregunta['tags']))
	{
		foreach ($pregunta['tags'] as $tag)
		{
			echo anchor('tags/tag/'.$tag, $tag, 'class = "badge badge-warning"');
		}
	}
	echo '<hr>';
}