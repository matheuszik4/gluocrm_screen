<?php
/* Smarty version 5.3.1, created on 2024-07-04 02:26:54
  from 'file:components/Navbar/Navbar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6685ec4ed798e1_45688965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358d5ddf53e226030ef7a28408a17e82994858d2' => 
    array (
      0 => 'components/Navbar/Navbar.tpl',
      1 => 1720052800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6685ec4ed798e1_45688965 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Xampp\\htdocs\\gluocrm\\templates\\components\\Navbar';
?><!-- IMPORT ASSETS -->
<link rel="stylesheet" type="text/css" href="templates/components/Navbar/Navbar.css">

<div class="navbar-container row">
    <div class="col items-container-left">
        <div class="item">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="item">
            <img src="templates/assets/imgs/gluocrm.png"/>
        </div>
    </div>
    <div class="col input-search">
        <div class="input-group input-search">
            <span class="input-group-text search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input 
                type="text" 
                class="form-control form-input" 
                placeholder="Digite para pesquisar" 
                aria-label="Digite para pesquisar" 
                aria-describedby="basic-addon1"
            />
        </div>
    </div>
    <div class="col items-container-right">
        <div class="item">
            <i class="fa-solid fa-circle-plus"></i>
        </div>
        <div class="item">
            <i class="fa-solid fa-calendar-days"></i>
        </div>
        <div class="item">
            <i class="fa-solid fa-chart-line"></i>
        </div>
        <div class="item">
            <i class="fa-solid fa-boxes-stacked"></i>
        </div>
        <div class="item divider">
            |
        </div>
        <div class="item">
            <i class="fa-regular fa-bell"></i>
        </div>
        <div class="item">
            <img 
                class="user-avatar" 
                src="templates/assets/imgs/user_avatar.png" 
            />
        </div>
    </div>
</div> <?php }
}
