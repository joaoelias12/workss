<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.custom{
         font-family: Courier;
         color: white;
         font-size 35px;


	}
	<?php 
     $dir_img = get_template_directory_uri()  . "/guts.jpg";
     echo "body {background-image: url($dir_img);}"     
	 ?>
     


	</style>
</head>
<body>

	<h1><p class="custom">I want to believe..</p></h1> 
	<?php
     //@DIR get_template_directory_uri() . "/guts.jpg";
     //<Img src ="<?php echo $DIR?//>">   
    
	if (have_posts()) : while(have_posts()) : the_post();
	     the_title();
	        the_content('Saiba mais..');
	       endwhile;
	      endif;

	$parametros = array(
	  'label_submit'   => "custom"'Enviar comentários',
	  'title_reply'    => "custom"'Deixe aqui seu comentário',
	  'comment_notes_after'  => "custom"'Mensagem para aconselhamento',
	  'id_form'      => 'idForm',
      'id_submit'    => 'idSubmit',
      'title_reply_to'  => 'Deixei uma resposta para %s',
      'comment_field'  => '<textarea id="comment" name="comment"></textarea>');
	 comment_form($parametros);
	      
	     ?>

</body>
</html>



