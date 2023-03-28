<?php
require("config.php");
$jwcomConfig['view']['config']['template_dir'] = APP_PATH.'/template/'.$jwcomConfig['ext']['view_themes'];
require(JWCOM_PATH."/sys.php");
spRun();