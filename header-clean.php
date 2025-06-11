<!DOCTYPE html>

<html <?php echo language_attributes(); ?>>

<head>
  <meta charset="<?php echo bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo bloginfo('title') ?>">
  <meta name="author" content="yeti lab">

  <title><?php wp_title(''); ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" />

  <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

