<?php
/* Smarty version 5.3.1, created on 2024-07-04 03:09:25
  from 'file:layouts/MainLayout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6685f645756f01_48118996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a53e1f286de4fe5633f3083b737c5e82ef829d0f' => 
    array (
      0 => 'layouts/MainLayout.tpl',
      1 => 1720053988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/Navbar/Navbar.tpl' => 1,
  ),
))) {
function content_6685f645756f01_48118996 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Xampp\\htdocs\\gluocrm_screen\\templates\\layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<html>
  <head>
    <title>GluoCRM</title>
    <link rel="icon" type="image/png" href="templates/assets/imgs/gluocrm.png">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/layouts/MainLayout.css">
    <?php echo '<script'; ?>
 src="node_modules/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/2ea9853917.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </head>
  <body>

    <?php $_smarty_tpl->renderSubTemplate("file:components/Navbar/Navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div id="app" class="container-main-layout">
      <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7066868976685f6457551c6_00105235', 'body');
?>

    </div>

  </body>
</html><?php }
/* {block 'body'} */
class Block_7066868976685f6457551c6_00105235 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Xampp\\htdocs\\gluocrm_screen\\templates\\layouts';
}
}
/* {/block 'body'} */
}
