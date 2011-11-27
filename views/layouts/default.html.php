<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SmartSuper</title>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

<script>

  $(document).bind("mobileinit", function(){
    $.mobile.defaultPageTransition = 'fade';
    $.mobile.loadingMessage = 'Cargando';
  });

  </script>

  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

<style>
.ui-listview-filter { padding: 0 20px; padding-bottom: 0; }
.my-prefs fieldset, .categories p { padding: 0 20px; }
.categories { margin: 0 auto; width: 310px; }
.categories fieldset { margin: 0; }
</style>

  </head>

<body>

<div data-role="page">

<div data-role="header" data-position="inline">
  <?php if (URI === '/profile') { ?>
  <a href="<?php echo ROOT; ?>" data-icon="back">Regresar</a>
  <?php } elseif (substr(URI, 0, 6) === '/offer') { ?>
  <a href="<?php echo ROOT; ?>" data-icon="back" data-rel="back">Regresar</a>
  <?php } ?>
  <h1>SmartSuper</h1>
  <a href="<?php echo url_for('profile'); ?>" data-icon="gear" class="ui-btn-right">Mi perfil</a>
</div>

<?php if (URI <> '/profile') { ?>
    <div data-role="navbar">
      <ul>

<?php foreach (array(
  url_for(ROOT) => array('Buscar ofertas', 'search'),
  url_for('list') => array('Mis ofertas', 'star'),
) as $one => $text) { ?>

<li>
  <?php echo link_to($text[0], $one, array(
    'data' => array('icon' => $text[1]),
    'class' => url_for(URI) === $one ? 'ui-btn-active' : ''
  )); ?>
</li>

<?php } ?>

      </ul>
    </div>

<?php } ?>

    <?php echo $body; ?>

  </div>

</div>

  </body>
</html>
