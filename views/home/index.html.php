<div data-role="header" data-position="inline">
  <h1>SmartSuper!</h1>
  <a href="<?php echo url_for::show_list(); ?>" data-icon="search" data-theme="b" class="ui-btn-right">Buscar ofertas</a>
</div>

<?php for ($x = 0; $x < 4; $x += 1) { ?>

<fieldset data-role="controlgroup" data-type="horizontal">
<?php for ($y = 0; $y < 3; $y += 1) { ?>

<input type="checkbox" name="checkbox-<?php echo "$x-$y"; ?>" id="checkbox-<?php echo "$x-$y"; ?>" class="custom" />
<label for="checkbox-<?php echo "$x-$y"; ?>">
  <img src="http://droidpirate.com/wp-content/uploads/2010/08/food.png">
</label>

<?php } ?>
</fieldset>


<?php } ?>
