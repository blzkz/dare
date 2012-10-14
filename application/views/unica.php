<?php
echo heading($titulo, 3);
echo '<hr />';
echo '<div class="well">'.$pregunta.'</div>'.br();
if (isset($tags))
{
	foreach ($tags as $tag)
	{
		echo anchor('tags/tag/'.$tag, $tag, 'class = "badge badge-warning"');
	}
}
?>