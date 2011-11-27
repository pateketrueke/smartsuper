<h1>Guardar oferta?</h1>
<p>Si quieres guardar esta oferta para consultarla mas adelante presiona aceptar.</p>
<a href="#" data-role="button" data-rel="back" data-theme="b" id="add_offer">Aceptar</a>
<a href="#" data-role="button" data-rel="back" data-theme="c">Cancelar</a>

<script>
$('#add_offer').click(function () {
  $.post('<?php echo url_for('async'); ?>?oid=<?php echo params('id'); ?>', function () {
    document.location.href = '<?php echo url_for(ROOT); ?>';
  });
});
</script>
