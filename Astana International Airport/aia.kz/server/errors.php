<?php  
	//Tato cast funkce dela push chyby, ktera vzplyva v array "errors", urcita chyba pridava v array "errors" v souborech s php logikou(server, login a td...)
	if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>