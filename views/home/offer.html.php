<?php $offer = offers::find(params('id')); ?>

<ul data-role="listview">
  <li>
    <img src="http://www.superama.com.mx/images/products/img_small/<?php echo $offer->image; ?>s.jpg">
    <h2><?php echo $offer->title; ?></h2>
    <p>Esta oferta la puedes encontrar en Superama, etc, etc...</p>
  </li>
</ul>
<div style="background:url(http://www.librosweb.es/img/ajax/f0907.gif);height:260px"></div>
