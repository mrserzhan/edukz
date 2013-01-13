<?php

/**
 * Class Groups
 *
 * @author Erko
 */
class Groups extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->breadcrumb->append_crumb('Groups', base_url().'groups/');
    }
    
    public function index() {
        
        $this->smarty->assign('groups', $this->db->get('groups')->result_array());
        $this->smarty->display('groups/index.tpl');
        
    }

    public function add() {

        $this->breadcrumb->append_crumb('Add group', base_url().'/groups/add');
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
    
    public function delete($id)
    {
        if(isset($id) && is_numeric($id))
        {
            $this->db->where('g_id', $id);
            $this->db->delete('groups');
        }
        redirect('groups/');
    }
    
    public function edit($id) {
        
        if(!isset($id) || !is_numeric($id))
        {
            redirect ('groups/');
            return;
        }
        
        $query = $this->db->where('g_id',$id);
        if($query->count_all_results('groups') != 1)
        {
            redirect ('groups/');
            return;
        }
        $query = $this->db->where('g_id',$id);
        $group = $query->get('groups')->row_array();
        
        $this->breadcrumb->append_crumb('Edit group '.$group['g_name'], base_url().'/groups/edit/'.$group['g_id']);
        
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
            
            foreach($_POST as $key => $check)
            {
                if($check != '123')
                    unset($_POST[$key]);
            }
            
            $data['g_privs'] = implode(',', array_keys($_POST));
            
            $this->db->where('g_id', $id);
            $this->db->update('groups',$data);
            redirect('groups/');
            
        } else {
            $group['g_privs'] = explode(',', $group['g_privs']);
            
            $this->smarty->assign('group',$group);
            $this->smarty->assign('privs', $this->config->item('privs'));
            $this->smarty->display('groups/edit.tpl');
        }
    }
    
    public function show($id)
    {
        if(!isset($id) || !is_numeric($id))
        {
            redirect ('groups/');
            return;
        }
        
        $query = $this->db->where('g_id',$id);
        if($query->count_all_results('groups') != 1)
        {
            redirect ('groups/');
            return;
        }
        
        $query = $this->db->where('g_id',$id);
        $group = $query->get('groups')->row_array();
        
        $this->breadcrumb->append_crumb($group['g_name'], base_url().'/groups/edit/'.$group['g_id']);
        
        $group['g_privs'] = explode(',', $group['g_privs']);
        
        $this->smarty->assign('group',$group);
        $this->smarty->assign('privs', $this->config->item('privs'));
        $this->smarty->display('groups/show.tpl');
        
    }

}

?>
