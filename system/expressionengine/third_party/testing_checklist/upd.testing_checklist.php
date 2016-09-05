<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing_checklist_upd {

    var $version = '1.0';

    /**
     * Module Installer
     *
     * @access	public
     * @return	bool
     */
    function install()
    {
        ee()->load->dbforge();

        //Install modules
        $data = array(
            'module_name' => 'Testing_checklist' ,
            'module_version' => $this->version,
            'has_cp_backend' => 'y',
            'has_publish_fields' => 'n'
        );

        ee()->db->insert('modules', $data);

        //Install actions
        $data = array(
            'class'		=> 'Testing_checklist',
            'method'	=> 'admin_check',
        );

        ee()->db->insert('actions', $data);

        $data = array(
            'class'     => 'Testing_checklist',
            'method'    => 'admin_permission_check'
        );

        ee()->db->insert('actions', $data);

        return TRUE;
    }
    // --------------------------------------------------------------------
    /**
     * Module Uninstaller
     *
     * @access	public
     * @return	bool
     */
    function uninstall()
    {
        ee()->load->dbforge();
        ee()->db->where('module_name', 'Testing_checklist');
        ee()->db->delete('modules');
        ee()->db->where('class', 'Testing_checklist');
        ee()->db->delete('actions');
        return TRUE;
    }
    // --------------------------------------------------------------------
    /**
     * Module Updater
     *
     * @access	public
     * @return	bool
     */
    function update($current='')
    {
        return TRUE;
    }
}