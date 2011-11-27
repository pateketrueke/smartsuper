<ul data-role="listview">
<?php for ($i = 0; $i < 5; $i += 1) { ?>

  <li>
    <a href="<?php echo url_for("offer/$i"); ?>">
      <img src="http://jquerymobile.com/demos/1.0/docs/lists/images/album-hc.jpg">
      <h2>Titulo</h2>
      <p>Descripcion</p>
      <span class="ui-li-aside">$000 - 1.2km</span>
    </a>
    <a href="<?php echo url_for("add/$i"); ?>" data-rel="dialog" data-icon="plus" data-iconpos="notext" title="Agregar">Agregar</a>
  </li>

<?php } ?>
</ul>
