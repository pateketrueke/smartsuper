<ul data-role="listview">

<?php

$my =
$all = array();

foreach (my_cats::all() as $one) {
  $all []= $one->cat_id;
}

foreach (my_list::all() as $one) {
  $my []= $one->offer_id;
}

$sql = '';

$all && $sql = sprintf('SELECT * FROM offers WHERE parent IN(%s)', join(', ', $all));
$my && $sql .= sprintf('AND id NOT IN(%s)', join(', ', $my));

if ($sql) {
  $result = db::query($sql);
?>

<?php while ($row = db::fetch($result, AS_OBJECT)) { ?>

  <li>
    <a href="<?php echo url_for("offer/$row->id"); ?>">
      <img src="http://www.superama.com.mx/images/products/img_small/<?php echo $row->image; ?>s.jpg">
      <h2><?php echo $row->title; ?></h2>
      <span class="ui-li-aside">$<?php echo $row->price; ?></span>
    </a>
    <a href="#" class="add_offer" data-id="<?php echo $row->id; ?>" data-icon="plus" data-iconpos="notext" title="Agregar">Agregar</a>
  </li>

<?php } ?>
</ul>

<script>
$('.add_offer').click(function () {
  $.post('<?php echo url_for('async'); ?>?oid=' + $(this).data('id'), function () {
    document.location.href = '<?php echo url_for(ROOT); ?>';
  });
  return false;
});
</script>

<?php } else { ?>
No hay ofertas para ti aún, por favor configura tu perfil.
<?php } ?>
