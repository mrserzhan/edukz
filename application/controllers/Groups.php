<?php

/**
 * Class Groups
 *
 * @author Erko
 */
class Groups extends CI_Controller {

    public function index() {
        
        $this->smarty->assign('groups', $this->db->get('groups')->result_array());
        $this->smarty->display('groups/index.tpl');
        
    }

    public function add() {

        $rules = array(
            array(
                'field' => 'name',
                'label' => 'Group name',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run()) {
            
            $data = array();
            $data['g_name'] = $this->input->post('name');
            $data['g_desc'] = $this->input->post('desc');
            unset($_POST['name']);
            unset($_POST['desc']);
            
            $data['g_privs'] = implode(',', array_keys($_POST));
            
            $this->db->insert('groups',$data);
            redirect('groups/');
            
        } else {
            $this->smarty->assign('privs', $this->config->item('privs'));
            $this->smarty->display('groups/add.tpl');
        }
    }

}

?>
