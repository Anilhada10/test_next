<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package creato
 */
global $creato_data;
$favicon = '';
if(isset($creato_data['creato_faviconurl']['url']) && !empty($creato_data['creato_faviconurl']['url'])){ 
$favicon = $creato_data['creato_faviconurl']['url']; 
}else{
$favicon = CREATO_PATH.'/images/favicon.ico';
}
?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo esc_url($favicon); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
get_template_part('include/section-nav');
?>