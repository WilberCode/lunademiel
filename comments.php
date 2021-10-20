<?php
comment_form(array(
	'title_reply' => __('¿Qué opinas?', 'ldm'), //Cambiar título
	
	'comment_field' => '<p class="comment-form-comment"><label for="comment" class="hidden" >Comentario</label> <textarea id="comment" name="comment" cols="45" rows="3" maxlength="65525" required="required"></textarea></p>', //Borrar párrafo y label del textarea
	'comment_notes_before' => '', //Borrar las notas antes del formulario
	'comment_notes_after' => '' //Editar las notas después del formulario
));