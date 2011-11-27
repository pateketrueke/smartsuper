<h1>Olvidar oferta?</h1>
<p>Si quieres eliminar esta oferta de tu lista personal presiona quitar.</p>
<a href="#" data-role="button" data-rel="back" data-theme="b" id="rm_offer">Quitar</a>
<a href="#" data-role="button" data-rel="back" data-theme="c">Cancelar</a>

<script>
$('#rm_offer').click(function () {
  $.post('<?php echo url_for('async'); ?>?oid=<?php echo params('id'); ?>&rm=1', function () {
    document.location.href = '<?php echo url_for('list'); ?>';
  });
});
</script>
