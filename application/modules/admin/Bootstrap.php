<?php
require_once ('Zend/Application/Module/Bootstrap.php');
class Admin_Bootstrap extends Dxcore_Application_Module_Bootstrap
{
	protected $hasFrontEndNav = true;
	protected $hasAdminNav = true;
}