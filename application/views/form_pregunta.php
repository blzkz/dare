<?php
echo form_open('pregunta/control');
echo form_label('Título').br();
echo form_input('titulo').br();
echo form_label('Pregunta').br();
echo form_textarea('pregunta').br();
echo form_label('Tags (separadas por comas)').br();
echo form_input('tags').br();
echo form_submit('Enviar', 'Enviar');
echo form_close();