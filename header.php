<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="blog-masthead">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <?php /* Primary navigation */
              wp_nav_menu( array(
                  'menu' => 'top_menu',
                  'depth' => 2,
                  'container' => false,
                  'menu_class' => 'nav',
                  'walker' => new wp_bootstrap_navwalker())
            );
          ?>
      </ul>
      <?php if(isset($_GET["s"])){ $search_terms = htmlspecialchars( $_GET["s"] );} ?>
      <form class="form-inline my-2 my-lg-0" role="form" action="<?php bloginfo('url'); ?>/" id="searchform" method="get">
          <input class="form-control mr-sm-2" id="s" name="s" type="search" placeholder="Search" aria-label="Search"<?php if ( isset($search_terms) && $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>
</div>

<div class="blog-container">

    <div class="row">