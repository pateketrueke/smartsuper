<ul data-role="listview">

<?php foreach (my_list::all() as $one) { ?>

<?php $row = offers::find($one->offer_id); ?>

  <li>
    <a href="<?php echo url_for("offer/$row->id"); ?>">
      <img src="http://www.superama.com.mx/images/products/img_small/<?php echo $row->image; ?>s.jpg">
      <h2><?php echo $row->title; ?></h2>
      <span class="ui-li-aside">$<?php echo $row->price; ?></span>
    </a>
    <a href="<?php echo url_for("rm/$row->id"); ?>" data-rel="dialog" data-icon="minus" data-iconpos="notext" title="Quitar">Quitar</a>
  </li>

<?php } ?>
</ul>
