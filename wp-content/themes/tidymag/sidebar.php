<?php
/**
* The file for displaying the sidebars.
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php if ( is_singular() ) { ?>
<div class='tidymag-sidebar-one-wrapper' id='tidymag-sidebar-one-wrapper' itemscope='itemscope' itemtype='http://schema.org/WPSideBar' role='complementary'>
<div class='theiaStickySidebar'>
<div class='tidymag-sidebar-one-wrapper-inside clearfix'>
<div class='tidymag-sidebar-content' id='tidymag-left-sidebar'>
<?php dynamic_sidebar( 'tidymag-left-sidebar' ); ?>
</div>
</div>
</div>
</div>

<div class='tidymag-sidebar-two-wrapper' id='tidymag-sidebar-two-wrapper' itemscope='itemscope' itemtype='http://schema.org/WPSideBar' role='complementary'>
<div class='theiaStickySidebar'>
<div class='tidymag-sidebar-two-wrapper-inside clearfix'>
<div class='tidymag-sidebar-content' id='tidymag-right-sidebar'>
<?php dynamic_sidebar( 'tidymag-right-sidebar' ); ?>
</div>
</div>
</div>
</div>
<?php } ?>