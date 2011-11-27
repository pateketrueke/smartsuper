<p>Selecciona el tipo de ofertas que te interesan:</p>

<?php for ($x = 0; $x < 4; $x += 1) { ?>

<fieldset data-role="controlgroup" data-type="horizontal">
<?php for ($y = 0; $y < 3; $y += 1) { ?>

<input type="checkbox" name="checkbox-<?php echo "$x-$y"; ?>" id="checkbox-<?php echo "$x-$y"; ?>" class="custom" />
<label for="checkbox-<?php echo "$x-$y"; ?>">
  <img src="http://www.adverpro.co.uk/offer-products/images/iconOffer.gif">
</label>

<?php } ?>
</fieldset>

<?php } ?>

<?php echo link_to('Buscar ofertas ya!', 'show', array(
  'data' => array('role' => 'button', 'icon' => 'arrow-r', 'iconpos' => 'right'),
)); ?>
