<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once PATH_THIRD.'testing_checklist/config.php';

/**
 * Class Testing_checklist
 */
class Testing_checklist {

    /**
     * @var string
     */
    var $return_data	= '';
    var $p_limit = '';

    /**
     * Use library to get variables and functions that need to be used multiple times in this file
     */
    public function __construct(){
        //ee()->load->library('pay_on_register_lib');
    }
}