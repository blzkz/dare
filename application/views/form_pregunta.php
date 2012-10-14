<?php
$att = array('class' => 'navbar-form pull-left');
echo validation_errors();
echo form_open('pregunta/control', $att);
echo form_label('Título','titulo');
$att = array('name' => 'titulo', 'id' => 'titulo', 'class' => 'span6');
echo form_input($att).br();
echo form_label('Pregunta', 'pregunta');
$att = array('name' => 'pregunta', 'id' => 'pregunta', 'class' => 'span6');
echo form_textarea($att).br();
echo form_label('Tags (separadas por comas)', 'tags');
$att = array('name' => 'tags', 'id' => 'tags', 'class' => 'span6');
echo form_input($att).br();
$att = array ('name' => 'Enviar', 'class' => 'btn');
echo form_submit($att, 'Enviar');
echo form_close();