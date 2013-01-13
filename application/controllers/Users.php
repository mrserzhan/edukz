<?php

/**
 * Class Users
 *
 * @author Erko
 */

class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->breadcrumb->append_crumb('Users', base_url().'users/');
    }
    
    public function add()
    {
        $this->breadcrumb->append_crumb('Add user', base_url().'users/add/');
        $this->smarty->display('users/add.tpl');
    }
    
}

?>
