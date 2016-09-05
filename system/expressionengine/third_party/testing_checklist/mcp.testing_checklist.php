<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing_checklist_mcp {

    function __construct()
    {

    }

    function index()
    {
        ee()->load->library('javascript');
        ee()->load->library('table');
        ee()->load->helper('form');

        ee()->view->cp_page_title = lang('Testing checklist');

        $vars['action_url'] = 'C=addons_modules' . AMP . 'M=show_module_cp' . AMP . 'module=Testing_checklist';
        $vars['form_hidden'] = NULL;
        $vars['files'] = array();

        $vars['options'] = array(
            'edit' => lang('edit_selected'),
            'delete' => lang('delete_selected')
        );

        $data = array(
            'foo' => 'bar',
            'lorem' => 'ipsum'
        );

        return ee()->load->view('my_file', $data, TRUE);
    }

}