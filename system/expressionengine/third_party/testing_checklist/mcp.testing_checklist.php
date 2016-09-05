<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing_checklist_mcp {

    function __construct()
    {
        ee()->cp->set_right_nav(array(
            'Test!'  => BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'
                .AMP.'module=testing_checklist'.AMP.'method=admin_check'
        ));

        $this->base_url = BASE.AMP.'C=addons_modules&amp;M=show_module_cp&amp;module='.'testing_checklist';
    }

    function index()
    {
        ee()->load->library('javascript');
        ee()->load->library('table');
        ee()->load->helper('form');

        ee()->view->cp_page_title = lang('Testing checklist');

        ee()->table->set_base_url('C=addons_modules&M=show_module_cp&module=testing_checklist');

        $vars['action_url'] = 'C=addons_modules' . AMP . 'M=show_module_cp' . AMP . 'module=testing_checklist';
        $vars['form_hidden'] = NULL;
        $vars['files'] = array();

        $vars['options'] = array(
            'test'  => lang('test')
        );

        $vars['run_test'] = $this->base_url . AMP . 'method=run_test';

        return ee()->load->view('mcp/index', $vars, TRUE);

    }

    function run_test()
    {
        echo 'test';
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