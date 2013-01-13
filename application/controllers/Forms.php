<?php


class Forms extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->breadcrumb->append_crumb('Forms', base_url().'forms/');
    }
    
    public function index() {
        
        $this->smarty->assign('forms',$this->db->get('forms')->result_array());
        $this->smarty->display('forms/index.tpl');
        
    }
    
    public function __
    
    public function add() {
        
        $rules = array(
            array(
                'field' => 'number',
                'label' => 'Number of form',
                'rules' => 'required|numberic|max_length[2]'
            ),
            array(
                'field' => 'char',
                'label' => 'Symbol of form',
                'rules' => 'required|min_length[1]|max_length[1]'
            )
        );
        $this->form_validation->set_rules($rules);
        
        if($this->form_validation->run())
        {
            $this->form_validation->
        }
        
    }
    
}

?>
