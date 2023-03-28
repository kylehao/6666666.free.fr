<?php
require("config.php");
$jwcomConfig['launch'] = array('router_prefilter' => array(array('syauser','check'),),);
$jwcomConfig['ext']['view_admin']= 'admin';
$jwcomConfig['view']['config']['template_dir'] = APP_PATH.'/source/admin/template';
$jwcomConfig['controller_path'] = APP_PATH.'/source/admin';

require(JWCOM_PATH."/sys.php");
import(APP_PATH.'/include/fun/fun_admin.php');
spRun();