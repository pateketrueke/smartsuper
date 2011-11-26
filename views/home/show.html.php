<div data-role="header" data-position="inline">
  <a href="<?php echo url_for::home(); ?>" data-icon="grid">Elegir categorias</a>
  <h1>SmartSuper!</h1>
</div>


<ul data-role="listview">
<?php for ($i = 0; $i < 20; $i += 1) { ?>

  <li>
    <img src="http://jquerymobile.com/demos/1.0/docs/lists/images/album-hc.jpg">
    <h2>Titulo</h2>
    <p>Descripcion</p>
    <span class="ui-li-count">$000</span>
  </li>

<?php } ?>
</ul>
