<?php  
	//Tato cast funkce dela push chyby, ktera vzplyva v array "error", urcita chyba pridava v array "error" v souborech s php logikou(server, login a td...)
	if (count($error) > 0) : ?>
  <div class="error">
  	<?php foreach ($error as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>