<div class="my-prefs">
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Género:</legend>
      <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
      <label for="radio-choice-1">Hombre</label>

      <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
      <label for="radio-choice-2">Mujer</label>
    </fieldset>

    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Año de nacimiento</legend>

      <select>
<?php for ($y = 2011; $y > 1970; $y -= 1) { ?>
        <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
<?php } ?>
      </select>
    </fieldset>

</div>

<div class="categories">

  <p>Selecciona el tipo de ofertas que te interesan:</p>
  <?php $categories = categories::all(); ?>

<?php for ($x = 0; $x < 4; $x += 1) { ?>

<fieldset data-role="controlgroup" data-type="horizontal">
<?php for ($y = 0; $y < 3; $y += 1) { ?>

<?php $one = array_shift($categories); ?>

<input <?php
echo ($st = my_cats::count_by_cat_id($one->id)) ? ' checked="checked" ' : '';
?> type="checkbox" name="checkbox-<?php echo "$x-$y"; ?>" id="checkbox-<?php echo "$x-$y"; ?>" class="category" data-id="<?php echo $one->id; ?>">
<label for="checkbox-<?php echo "$x-$y"; ?>">
  <img src="<?php  echo path_to(sprintf('img/%s_%s.png',slug($one->title,'_',SLUG_TRIM|SLUG_STRICT|SLUG_LOWER),$st?'on':'off')); ?>" title="<?php echo $one->title; ?>">
</label>

<?php } ?>
</fieldset>

<?php } ?>

</div>

<?php echo link_to('Buscar ofertas ya!', ROOT, array(
  'data' => array('role' => 'button', 'icon' => 'arrow-r', 'iconpos' => 'right'),
)); ?>

<script>
$('input.category').click(function () {
  var st = this.checked,
      el = $(this);

  $.post('<?php echo url_for('async'); ?>?cid=' + el.data('id') + '&st=' + (st ? 1 : 0), function () {
    var img = el.parent().find('img'),
        url = img.prop('src');

    url = ! st ? url.replace('_on', '_off') : url.replace('_off', '_on');

    img.attr('src', url);
  });
});
</script>
