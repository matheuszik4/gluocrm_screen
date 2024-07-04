<?php 

require_once "vendor/autoload.php";
require_once('./smarty_instance.php');

use App\Controllers\CrmController;

// Rendering initial crm page
CrmController::index();