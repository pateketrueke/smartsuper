<ul data-role="listview">
  <li>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Género:</legend>
      <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
      <label for="radio-choice-1">Hombre</label>

      <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
      <label for="radio-choice-2">Mujer</label>
    </fieldset>
  </li>
  <li>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Cumpleaños:</legend>
      <select>
<?php for ($d = 1; $d < 31; $d += 1) { ?>
        <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
<?php } ?>
      </select>
      <select>
<?php foreach (array(
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre',
) as $m => $one) { ?>
      <option value="<?php echo $m + 1; ?>"><?php echo $one; ?></option>
<?php } ?>
    </select>
      <select>
<?php for ($y = 2011; $y > 1970; $y -= 1) { ?>
        <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
<?php } ?>
      </select>
    </fieldset>
  </li>
</ul>
