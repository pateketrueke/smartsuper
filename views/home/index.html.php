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

$sql = sprintf('SELECT * FROM offers WHERE parent IN(%s) AND id NOT IN(%s)', join(', ', $all), join(', ', $my));

$result = db::query($sql);

?>

<?php while ($row = db::fetch($result, AS_OBJECT)) { ?>

  <li>
    <a href="<?php echo url_for("offer/$row->id"); ?>">
      <img src="http://www.superama.com.mx/images/products/img_small/<?php echo $row->image; ?>s.jpg">
      <h2><?php echo $row->title; ?></h2>
      <span class="ui-li-aside">$<?php echo $row->price; ?></span>
    </a>
    <a href="<?php echo url_for("add/$row->id"); ?>" data-rel="dialog" data-icon="plus" data-iconpos="notext" title="Agregar">Agregar</a>
  </li>

<?php } ?>
</ul>
