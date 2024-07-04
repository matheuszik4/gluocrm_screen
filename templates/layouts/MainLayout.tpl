{* Smarty *}
<html>
  <head>
    <title>GluoCRM</title>
    <link rel="icon" type="image/png" href="templates/assets/imgs/gluocrm.png">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/layouts/MainLayout.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2ea9853917.js" crossorigin="anonymous"></script>
  </head>
  <body>

    {include file="components/Navbar/Navbar.tpl"}

    <div id="app" class="container-main-layout">
      {block name=body}{/block}
    </div>

  </body>
</html>