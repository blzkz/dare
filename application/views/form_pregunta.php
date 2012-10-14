<?php
echo form_open('pregunta/control');
echo form_label('Título')."<br>";
echo form_input('titulo')."<br>";
echo form_label('Pregunta')."<br>";
echo form_textarea('Pregunta')."<br>";
echo form_submit('Enviar', 'Enviar');
echo form_close();