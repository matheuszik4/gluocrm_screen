<?php
/* Smarty version 5.3.1, created on 2024-07-04 02:51:58
  from 'file:pages/crm/crm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6685f22eba6f36_36597271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d57ef126f277458e193ac2fb786f1c95d18ce9' => 
    array (
      0 => 'pages/crm/crm.tpl',
      1 => 1720054318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6685f22eba6f36_36597271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Xampp\\htdocs\\gluocrm\\templates\\pages\\crm';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15162580786685f22eba1093_48450137', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layouts/MainLayout.tpl', $_smarty_current_dir);
}
/* {block 'body'} */
class Block_15162580786685f22eba1093_48450137 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Xampp\\htdocs\\gluocrm\\templates\\pages\\crm';
?>

  <link rel="stylesheet" type="text/css" href="templates/pages/crm/Crm.css">

  <div class="container-crm-page">
    <div class="crm-header row">
      <div class="col-lg-6 col-md-12 col-sm-12 right-align-container">
        <p class="item">Lead Score | <b>ALL</b></p>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 left-align-container">
        <div class="item">
          <button type="button" class="btn btn-theme-lite-success">
            <i class="fa-solid fa-plus"></i> 
            Adicionar Registro
          </button>
        </div>
        <div class="item">
          <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-download"></i> 
            Importar
          </button>
        </div>
        <div class="item">
          <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-gear"></i> 
            Customizar
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 right-align-container mt-3">
        <div class="item">
          <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-folder-open"></i> 
            <div>Todas as Listas</div>
            <i class="fa-solid fa-sort-down"></i>
          </button>
        </div>
        <div class="item">
          <button type="button" class="btn btn-theme-disabled-grey">
          <i class="fa-solid fa-trash"></i></button>
        </div>
        <div class="item">
          <button type="button" class="btn btn-theme-disabled-grey">
          <i class="fa-solid fa-pen"></i></button>
        </div>
        <div class="item">
          <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-ellipsis-vertical"></i>
            <div>Mais</div>
            <i class="fa-solid fa-sort-down"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 left-align-container mt-3">
        <div class="item">
          <button type="button" class="btn btn-secondary" style="gap: 2px;">
            <i class="fa-solid fa-angle-left"></i> 
            <i class="fa-solid fa-ellipsis"></i> 
            <i class="fa-solid fa-angle-right"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="crm-table-container mt-4">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="vertical-center">
              <div class="center-vertically">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </th>
            <th scope="col">RESPONSÁVEL</th>
            <th scope="col">RELACIONADO A</th>
            <th scope="col">PONTO DE CONTATO</th>
            <th scope="col">ESTÁGIO DO FUNIL</th>
            <th scope="col">PONTOS</th>
            <th scope="col">COMENTÁRIO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="center-vertically" style="margin-top: 5px;">
                <button type="button" class="btn btn-theme-lite-success">
                <i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </td>
            <td>
              <fieldset>
                <input class="form-control" type="text" placeholder="Pesquisar" readonly>
              </fieldset>
            </td>
            <td>
              <fieldset>
                <input class="form-control" type="text" placeholder="Pesquisar" readonly>
              </fieldset>
            </td>
            <td>
              <fieldset>
                <input class="form-control" type="text" placeholder="Pesquisar" readonly>
              </fieldset>
            </td>
            <td>
              <fieldset>
                <input class="form-control" type="text" placeholder="Pesquisar" readonly>
              </fieldset>
            </td>
            <td>
              <fieldset>
                <input class="form-control" type="text" placeholder="Pesquisar" readonly>
              </fieldset>
            </td>
            <td>
              <fieldset>
                <input class="form-control" type="text" placeholder="Pesquisar" readonly>
              </fieldset>
            </td>
          </tr>
          <tr class="table-row-items">
            <td>
              <div class="center-vertically">
                <input class="form-check-input" type="checkbox">
              </div>
            </td>
            <td>
              Valmir Trindade
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>Teste</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
<?php
}
}
/* {/block 'body'} */
}
