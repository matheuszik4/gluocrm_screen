<?php 

namespace App\Controllers;

class CrmController {

    public static function index() {
        SMART->display('pages/crm/crm.tpl');
    }

}