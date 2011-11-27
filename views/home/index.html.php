<?php for ($x = 0; $x < 4; $x += 1) { ?>

<fieldset data-role="controlgroup" data-type="horizontal">
<?php for ($y = 0; $y < 3; $y += 1) { ?>

<input type="checkbox" name="checkbox-<?php echo "$x-$y"; ?>" id="checkbox-<?php echo "$x-$y"; ?>" class="custom" />
<label for="checkbox-<?php echo "$x-$y"; ?>">
  <img src="http://www.miamitexas.org/picts/food_icon.gif">
</label>

<?php } ?>
</fieldset>


<?php } ?>
