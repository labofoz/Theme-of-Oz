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
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="app">
    <header id="header-main">
      <div class="container">
        <!-- Logo -->
        <?php if (has_custom_logo()): ?>
          <div class="site-logo"><?php the_custom_logo() ?></div>
        <?php endif ?>

        <!-- Title -->
        <?php if ($site['name']): ?>
          <h1 class="site-title">
            <a href="<?= esc_url(home_url('/')) ?>"><?= $site['name'] ?></a>
          </h1>
        <?php endif ?>

        <!-- Description -->
        <?php if ($site['description']): ?>
          <p class="site-description"><?= $site['description'] ?></p>
        <?php endif ?>
      </div>
    </header>