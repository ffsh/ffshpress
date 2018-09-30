<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="blog-header">
        <div>
            <a class="blog-title" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        </div>
        <div class="blog-description">
            <?php bloginfo('description')?>
        </div>
  </div>
  <div class="blog-masthead">

    <nav class="navbar navbar-expand-md">
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php /* Primary navigation */
          wp_nav_menu( array(
              'menu' => 'top_menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'navbar-nav mr-auto',
              'walker' => new wp_bootstrap_navwalker())
            );
        ?>
</div>
</nav>
</div>

<div class="container-fluid blog-container">

