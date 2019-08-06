<?php
// Template setup
$site = [
  'name' => get_bloginfo('name'),
  'description' => get_bloginfo('description')
];

// Template:
?><!doctype html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="app">
    <header id="header-main">
      <div class="container">
        <div class="site-branding">
          <!-- Logo -->
          <?php if (has_custom_logo()): ?>
            <div class="site-logo"><?php the_custom_logo() ?></div>
          <?php endif ?>

          <!-- Title -->
          <div class="site-title-wrap">
            <?php if ($site['name']): ?>
              <h1 class="site-title">
                <a href="<?= esc_url(home_url('/')) ?>"><?= $site['name'] ?></a>
              </h1>
            <?php endif ?>

            <!-- Description -->
            <?php if ($site['description']): ?>
              <div class="site-description"><?= $site['description'] ?></div>
            <?php endif ?>
          </div>
        </div>

        <!-- Menu -->
        <?php if (has_nav_menu('menu-main')): ?>
          <?php wp_nav_menu([
            'theme_location' => 'menu-main',
            'menu_class' => 'menu-main',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
          ]) ?>
        <?php endif; ?>
      </div>
    </header>