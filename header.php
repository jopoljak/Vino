<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
<header id="header">
  <div id="header-content">
    <div id="header-logo">
      <h1 class="logo">LOGO</h1>
    </div>
    <nav id="header-nav" role="navigation">
      <ul class="nav">
        <li><a href="#onas">O nás</a></li>
        <li><a href="#vinohrady">Vinohrady</a></li>
        <li><a href="#vina">Vína</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
      </ul>
    </nav>
    <div id="header-nav-toggle" class="is-hidden">
      <b class="fa fa-bars">&equiv;</b>
    </div>
  </div>
</header>

    