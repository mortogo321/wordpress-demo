<!doctype html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="robots" content="INDEX,FOLLOW"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <title><?php bloginfo('name');?></title>

  <link  rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
<a id="top" tabindex="-1"></a>