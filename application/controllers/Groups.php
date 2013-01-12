<?php

/**
 * Class Groups
 *
 * @author Erko
 */
class Groups extends CI_Controller {
    
    public function index()
    {
        $this->smarty->display('groups/index.tpl');
    }
    
    public function add()
    {
        $this->smarty->display('groups/add.tpl');
    }
    
}

?>
