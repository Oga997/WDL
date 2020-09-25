<html>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<style>
    .error{
        color: red;
        font-family: sans-serif;
        font-size: 20px;
    }    
</style>
</html>