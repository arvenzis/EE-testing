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

    /**
     * Checks to see if the administrator exists
     */
    function admin_check()
    {

    }

    /**
     * Checks to see if the administrator account has all the correct permissions
     */
    function admin_permission_check()
    {

    }

    /**
     * Checks whether the SEO module contains other values than the default values
     */
    function seo_check()
    {

    }

    /**
     * Creates an empty entry at each channel to see if this still looks OK as a page
     */
    function create_empty_entry()
    {

    }

    /**
     * Fill all fields if possible and create entry
     */
    function create_entry()
    {

    }

    /**
     * Checks to see if the email configuration has been setup
     */
    function email_configuration_check()
    {

    }

    /**
     * Checks to see if the url_title field has been moved to the Options or Structure tab
     */
    function url_title_moved()
    {

    }
}