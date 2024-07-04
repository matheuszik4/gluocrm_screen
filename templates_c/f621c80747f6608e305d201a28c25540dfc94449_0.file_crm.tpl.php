<?php
/* Smarty version 5.3.1, created on 2024-06-30 20:07:07
  from 'file:pages/crm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66819ecbba3c40_00891495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f621c80747f6608e305d201a28c25540dfc94449' => 
    array (
      0 => 'pages/crm.tpl',
      1 => 1719770821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/navbar/navbar.tpl' => 1,
  ),
))) {
function content_66819ecbba3c40_00891495 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Xampp\\htdocs\\gluocrm\\templates\\pages';
?><html>
  <head>
    <title>GluoCRM</title>
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="node_modules/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>

    <?php $_smarty_tpl->renderSubTemplate("file:components/navbar/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

  </body>
</html><?php }
}
