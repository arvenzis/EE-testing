<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! defined('TESTING_CHECKLIST_NAME'))
{
    define('TESTING_CHECKLIST_NAME', 'Testing checklist');
    define('TESTING_CHECKLIST_CLASS', 'Testing_checklist');
    define('TESTING_CHECKLIST_MAP', 'testing_checklist');
    define('TESTING_CHECKLIST_VERSION', '1.0');
    define('TESTING_CHECKLIST_DESCRIPTION', 'Tests a few things to save work for lazy developers');
    define('TESTING_CHECKLIST_DOCS', '');
    define('TESTING_CHECKLIST_DEVOTEE', '');
    define('TESTING_CHECKLIST_AUTHOR', 'Karen Bosch');
    define('TESTING_CHECKLIST_DEBUG', true);
    define('TESTING_CHECKLIST_STATS_URL', '');
}

//configs
$config['name'] = TESTING_CHECKLIST_NAME;
$config['version'] = TESTING_CHECKLIST_VERSION;

//load compat file
require_once(PATH_THIRD.TESTING_CHECKLIST_MAP.'/compat.php');