<?php 

require_once('./libs/Smarty.class.php');

use Smarty\Smarty;

CONST SMART = new Smarty();

SMART->setTemplateDir(__DIR__.'/templates');
SMART->setCompileDir(__DIR__.'/templates_c');
SMART->setCacheDir(__DIR__.'/cache');
SMART->setConfigDir(__DIR__.'/configs');